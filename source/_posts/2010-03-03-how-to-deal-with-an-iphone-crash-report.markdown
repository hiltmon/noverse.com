---
layout: post
title: "How to deal with an iPhone crash report"
date: 2010-03-03 22:37
comments: true
author: Hiltmon
categories:
- Software Designer
- Tools and Techniques
---

Kudos to the app review team at Apple, they found a crasher in the update to Emergency List that I recently submitted.  They even took the time to step through and document what they did exactly to reproduce the error.

From their email:
    
    1. Launch app connected to a network
    2. Tap Emergency List
    3. Tap the Add button
    4. Tap Add from Address Book
    5. App crashes
    
    Please refer to the attached crash logs.
    
They even sent two crash logs to help find the problem.

### Reading the Crash Logs

The crash logs by themselves are very difficult to read.  Below is a segment:
    
    Thread 0 Crashed:
    0   libSystem.B.dylib             	0x3293f98c 0x328c1000 + 518540
    1   libSystem.B.dylib             	0x3293f97c 0x328c1000 + 518524
    2   libSystem.B.dylib             	0x3293f96e 0x328c1000 + 518510
    3   libSystem.B.dylib             	0x3295461a 0x328c1000 + 603674
    4   libstdc++.6.dylib             	0x30a143b0 0x309cf000 + 283568
    5   libobjc.A.dylib               	0x3347a858 0x33475000 + 22616
    6   libstdc++.6.dylib             	0x30a12776 0x309cf000 + 276342
    7   libstdc++.6.dylib             	0x30a127ca 0x309cf000 + 276426
    8   libstdc++.6.dylib             	0x30a12896 0x309cf000 + 276630
    9   libobjc.A.dylib               	0x33479714 0x33475000 + 18196
    10  CoreFoundation                	0x3355ab86 0x33534000 + 158598
    11  CoreFoundation                	0x3355ab24 0x33534000 + 158500
    12  Foundation                    	0x326cf9ae 0x3267e000 + 334254
    13  Foundation                    	0x32685760 0x3267e000 + 30560
    14  EmergencyNumbers              	0x0000641c 0x1000 + 21532
    15  EmergencyNumbers              	0x000060d2 0x1000 + 20690
    16  UIKit                         	0x31c63aa4 0x31c17000 + 314020
    17  UIKit                         	0x31c7aec0 0x31c17000 + 409280
    18  UIKit                         	0x31c7ace0 0x31c17000 + 408800
    19  UIKit                         	0x31c7abde 0x31c17000 + 408542
    20  UIKit                         	0x31c7a784 0x31c17000 + 407428
    21  UIKit                         	0x31c7a59c 0x31c17000 + 406940
    22  UIKit                         	0x31c7a4e0 0x31c17000 + 406752
    23  UIKit                         	0x31c65df4 0x31c17000 + 323060
    24  UIKit                         	0x31c4a574 0x31c17000 + 210292
    25  QuartzCore                    	0x30039004 0x30030000 + 36868
    26  QuartzCore                    	0x30038e1c 0x30030000 + 36380
    27  QuartzCore                    	0x3003893c 0x30030000 + 35132
    28  QuartzCore                    	0x300386a2 0x30030000 + 34466
    29  QuartzCore                    	0x3003e02a 0x30030000 + 57386
    30  CoreFoundation                	0x33543b50 0x33534000 + 64336
    31  CoreFoundation                	0x3358aa32 0x33534000 + 354866
    32  CoreFoundation                	0x3358a356 0x33534000 + 353110
    33  GraphicsServices              	0x3352bb2c 0x33528000 + 15148
    34  GraphicsServices              	0x3352bbd8 0x33528000 + 15320
    35  UIKit                         	0x31c19768 0x31c17000 + 10088
    36  UIKit                         	0x31c1846c 0x31c17000 + 5228
    37  EmergencyNumbers              	0x000020b4 0x1000 + 4276
    38  EmergencyNumbers              	0x00002070 0x1000 + 4208
    
All I can read from this is that lines 14 and 15 above in the stack trace is where the crash happened in MY code.  But what does 0x0000641c mean?

Fortunately, I had the dSYM file for the release that they reviewed handy.  I ran the following command against it:

    dwarfdump --lookup 0x0000641c -arch armv6 EmergencyNumbers.app.dSYM

This command would tell me at what line the app failed.  And here it is:
    
    Line table file: 'AddressBookLookupTableViewController.m' line 60, 
    column 0 with start address 0x000000000000641a
    
### Determining the cause of the Crash

Going to that file and line in the source code reveals:
    
{% codeblock lang:objc %}
CFStringRef cfName = ABRecordCopyCompositeName(person);
aName = [NSString stringWithString:(NSString *)cfName];
CFRelease(cfName);
{% endcodeblock %}
    
So the crash is happening in the ` NSString stringWithString`.  If `cfName` is equal to nil, this line of code will crash. 

### Understanding the Error

But this error makes no sense to me.  In line 59, `cfName` is populated with the composite name from a valid address book record (person is not nil).  According to Apple's reference documentation, ABRecordCopyCompositeName returns:
    
    For group records: The value of the group name property
    	(kABGroupNameProperty).
    For person records: The concatenated value of these properties:
    	Prefix, Suffix, Organization, First name, and Last name.
    
I just assumed that all contact records in the address book would actually have a name of some kind.  _And I was wrong!_  It turns out that it is possible to create address book entries with none of the above fields filled in.  And my code should support that.

### The Fix

Easy.  If `cfName` is `nil`, use a default name called "No Name", just like the address book on Mac OS X.  I noticed that the iPhone address book works differently in that it has a cascade of which fields it shows before coming up with "No Name", but that is not necessary for my app.
    
{% codeblock lang:objc %}
// It is possible for address books to have no name entries
CFStringRef cfName = ABRecordCopyCompositeName(person);
if (cfName != nil)
{
	aName = [NSString stringWithString:(NSString *)cfName];
	CFRelease(cfName);
}
else
{
	aName = @"No Name";
}
{% endcodeblock %}

### Lessons Learned

* Always save the dSYM file from each release so that you can drill on crash reports.
* Always save a snapshot of each release version in source code control so you can pull out the right code base to match the crash report.
* Watch out for assumptions when writing code.  I assumed all address book contacts would have names.  I was wrong!

Once again, thanks Apple Review People for catching this.
