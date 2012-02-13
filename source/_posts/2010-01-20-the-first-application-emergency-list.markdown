---
layout: post
title: "The First Application - Emergency List"
date: 2010-01-20 12:40
comments: true
author: Hiltmon
categories:
- Indie Developer
---

Most people I know, especially the elderly and those with kids, have a piece of paper taped to their landline phones containing a list of emergency or key contact numbers.  That way, when needed, the number needed is easily found, and anyone can dial it.

I intend to create an iPhone application to do this.

## Problems it will Solve
  
* Calling the right number in an emergency very very quickly without having to search for it
* Finding the necessary supporting information when making an emergency call
* Sharing the list and keeping it up to date

## Key Features and Benefits

**Feature 1: Two taps to call the top emergency contacts** - I'd like the top 5 emergency numbers to be presented on startup, allowing the user to tap to launch the app, then tap an entry to dial.  It should take at most two taps to call in an emergency.  For lower priority numbers, I'd like the user to see a comprehensive list and then be able to tap and call.

**Feature 2: Input key numbers with additional info** - The user needs to be able to add and edit key numbers and to associate some data with each number.  For example, save the medical policy number with the doctor's number, or the electricity account number with the power company number.  I'd also like the app to leverage any data already in the user's address book so data entry is minimized.

**Feature 3: Synchronize this list between devices** - I believe that any updates to the emergency contact list should be propagated to all devices that have the list automatically.  That way, of one member of a household changes the list, all members get the update.

**Feature 4: Print the list for taping next to real phones** - The original product, the taped emergency contact list - is still very functional, should also be kept up to date.

Other features under consideration:
  
* Send an emergency SMS, although I do not know if its supported anywhere
* Send an 'I'm OK', or 'I'm on the way home' message with location information, for children to notify parents who are waiting up.
* Call the local emergency room, using location information to find the nearest hospital.  This may be too big a feature, will likely be rejected.
* Do some of the stuff the listed products below do

## Competing Products

Search for 'emergency' on the iTunes App Store and you'll get more than 300 results.  There are many apps that

* Dial a single emergency number with a single tap<\li>
* Store the iPhone owners' emergency contact and medical details (some even create a wallpaper image with the emergency contact on them)
* Choose the right emergency number depending on location
* Contain information on what to do in an emergency

None seem to offer what most people have, that phone list next to the phone, and none offer synchronizing.

What about the Address Book app?  Some people do use it, by placing emergency numbers at the top of the list using spaces and numbers in the name.  The problems with this approach are that the address book contains too many contacts to search, and that it does not always open at the top of the list.

What about favorites in the phone app?  Again, some people use this, but its 99% more likely that best friends and family are on that list.

## How is this better?

This is better because
  
* It replicates an existing, proven and comfortable process, the taped list, except its in your hand.
* Two taps to call in an emergency, thats fast!
* The whole family can be updated in a single shot, eventually.

## The Plan

_Its always dangerous in software design to start an application with a large feature set_, so the first version of the product will implement the first two features only, top numbers and the full list.  It will be developed for the iPhone and iPod Touch (I am aware the touch cannot dial, but it can provide quick and handy access to the list of numbers).

The second version of the product will have a companion Macintosh application that will allow the user to centrally maintain the list and act as the master synchronization station for all mobile users.  I may also offer MobileMe or other types of synchronization, but those decisions can wait.

## Decisions to Make

I need to decide

* Is the killer feature, the one that will make people want this app, missing?
* Will the application be paid or free?
* Should I share the code I write as part of sharing the design process?
* Is this really the right starter project?
* Do I need a Windows client too? Linux? Android? Symbian?
* Should I even release this as a product, or just treat it as a public example?
* How will I market it?
* Where can I get beta testers?
* Is the above plan reasonable or not?
* Does anyone really need this? Anyone?

Time to get started.
