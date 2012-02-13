---
layout: post
title: "Replacing the Address Book Picker"
date: 2010-03-11 12:56
comments: true
author: Hiltmon
categories:
- Software Designer
- Tools and Techniques
---

In the first release of Emergency List, I used the default `ABPeoplePickerNavigationController` to allow users to add emergency contacts from their iPhone Address Book.  Real users found it confusing, so I wrote my own.

### What's wrong with the Apple implementation?

The requirement is for the user to pick a phone number for a contact.

The implementation requires you to launch an address book picker which displays a list of contact names - just the names and nothing else.  To enable the user to pick a phone number, you need to return `NO` to `– peoplePickerNavigationController: shouldContinueAfterSelectingPerson:` so that the picker displays details of that contact when the user taps it.  You also need to set `displayedProperties` to phone numbers only so only numbers appear in the details of that contact.  The user can then tap a phone number to add it to my app.

So, the user has to tap a name then tap a number _on the next view_ that comes up.  Two taps on two views to pick a phone number.

Seems simple but most users wondered why they got the second view when they tapped a name.  Surely they could just tap a name and the number would be used.

### Solution 1:  Just use the list of names

Simple, I thought.  Launch the picker and allow the user to pick a name.  As soon as the user taps the name, return.  If the selected address book record has one and only one phone number, use it.  Otherwise give the user a list of numbers to pick on an alert sheet and we're good to go.

I did not like this solution because
	
* It still required two views in most cases to pick contact numbers - the picker and the alert
* What if the contact had no phone numbers - an email only contact?
* What if the user changed their minds between picking the person and choosing the number.  Using the default picker behavior above, they could hit the back button.  Not so with the picker gone and an alert being shown.

### Solution 2: Create a table view with names and numbers

Sounds better.  Get all address book entries, build a list of names and numbers and allow the user to pick them off a simple table view with names on the left and numbers on the right.

I liked this better because:

* Single tap to pick a number that you can see
* I can filter out contacts with no numbers

So I created it.  I started with an array of 26 arrays, one for each letter of the alphabet.  I then looped through the address book, and if the contact had a number, would add that contact and each number and its category (home, mobile, work) to the correct letter array.  I then sort each letter array using the last name of each contact.  I based a standard `UITableView` on this data structure, showing names and categories on the left and numbers on the right, separated by letter sections, and even added an index to make finding names quicker.  Like so:

{% img /images/NewAddressPicker.png 200 288 %}

But it was not as easy as that, and I found that out the hard way, when beta testers and real users sent crash logs:

* Turns out that lots of contacts had no contact name.  Several people just input an email address on a contact and remember that.  When this happens, `ABRecordCopyCompositeName` returns `nil` and when `nil` is passed to `NSString stringWithString:`, it crashes.  So I had to use a default "No Name" in this case, just like Address Book on the Mac does.
* Turns out, lots of contact names are not written in roman characters.  Which bucket, then, does the name belong in on a roman alphabet index?  Solution, foreign character names go into the last or "Z" bucket, just like Address Book on the Mac.  I did not implement a "#" bucket for numeric names either.
* Turns out not all address books have names in all 26 categories.  It really looks ugly when there are two section headings and nothing between them.  So I had to modify the sectional data structure to skip out empty sections.  I also then had to create a mapping table between the index and valid sections.  So when the user taps an index item where the section was blank, the view goes to the previous section.
* Turns out, not all address book phone numbers have good categories.  Sometimes the type is `nil` or garbage, causing crashes.  So now I recognize the standard types and ignore all others.  For example, I recognize Kate Bell's mobile number "(M)" but not the other number's category.

So there it is, my phone number picker.
