---
layout: post
title: "How to deal with an iPhone crash report, a better way"
date: 2010-08-10 11:14
comments: true
author: Hiltmon
categories:
- Software Designer
- Tools and Techniques
---

There is an easier way to deal with an iPhone crash report than in my previous article [How to deal with an iPhone crash report]({{ root_url }}/blog/2010/03/how-to-deal-with-an-iphone-crash-report/).  And here it is.

### Before you release the app

Run a `Build and Archive` in Xcode, making sure that the version you are building is the one you are sending out (beta release or final release, properly code signed).

Xcode builds the app, the places the app, its dSYM file, a plist and the ipa file in `~/Library/Mobiledevice/Archived Applications/<UUID>/` where it can be found and managed by Organizer and by spotlight.  Open the Organizer in Xcode (`Window / Organizer`) and choose `Archived Applications` to see them.

What I normally do is then send the application out using the buttons at the bottom, either via email to the the app store.  This way, I am sure that the same version, with the same dSYM is both archived and sent out.  I generally do not re-sign files as they are already properly code signed when I archive them.

### When you get a crash report

Drag the crash report into the Organizer windows onto the `Device Logs` item.  Xcode will scan for the matching dSYM (which you previously archived) and will symbolicate the crashlog for you.  No more `dwarfdump`, no more fancy command line tricks.

I suspect this does not yet work in the new Xcode 4, but will be available when its released.
