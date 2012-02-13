---
layout: post
title: "It's been one week since you looked at me"
date: 2010-04-12 10:56
comments: true
author: Hiltmon
categories:
- Techie
---

After a week with the iPad...
  
* I have read a few books on it.  In fact, that's where I have spent most of my time on it.  The text is easy to read about three notches from smallest, but I need to dim the screen at night as it gets too bright.  No eyestrain so far.  I have made a few of my own documents into ePubs and it works great.
* The battery life is insane.  I have only managed to run the battery dead once and that took all day.  It also takes a while to charge, so I usually leave it on the wall socket at night.
* The wifi issues are slightly annoying me at home, but nowhere else - go figure!  Basically, the device randomly disconnects from the wifi and sometimes forgets to reconnect, and sometimes asks for the password again.  I usually find out when clicking a link in [Twitteriffic](http://itunes.apple.com/us/app/twitterrific-for-ipad/id359914600?mt=8) or [NetNewswire](http://itunes.apple.com/us/app/netnewswire-for-ipad/id363704172?mt=8), or when waking it up from sleep.  The solution is to tap over to settings, turn the wifi off and on again and it works.  Or launch Safari, that seems to help too.    I suspect though that this is an iPad software issue as I notice the wifi seems to time out when I stay in the same - non apple made - app for more than 20 minutes.  _Developers, please set the needs persistent wifi in your app if it uses it (see below), I suspect that may fix the issue too._
* _I am saving the world!_  By using less power!  Since I got the iPad, I turn off my big desktop computers and huge monitors when I am not using them.  I turn them on only when needing to develop.  And I am starting to use the laptop more and more for that.
* The Apple case finally arrived and I'm ambivalent about it.  I like the fact that the screen is protected - #1 reason for a case - and I like the feel of the case - like black velvet baby.  But the design of the case is quite ugly, especially the edges, the flappy cover gets annoying when reading or rotating, and it shows every piece of dust in the house.  Still, the pros outweigh the cons so its staying on.  And its kind of hard to take it off anyway!
* I have total designer's block.  I mentioned this last time, the screen, the placement of my hands, the rotation, it changes everything.  And I am struggling to come up with software UI's that I like on it.  Getting closer though, turns out messing with frames is a lot easier than I thought.
* The home button (the little round one on the face of the iPad and iPhone) is sometimes hard to find.  Yes, I know it sounds silly as its the ONLY button on the face of the device, but after a rotation shell game, it could be in one of two places and half the time, I pick the wrong place.  The device is made to be viewed from any rotation, so this is kind of funny.
* Get a drawing tool!  I have three.  But the one I use the most is [Adobe Ideas](http://itunes.apple.com/us/app/adobe-ideas-1-0-for-ipad/id364617858?mt=8).  It turns the iPad into a quick and dirty whiteboard.  Being a visual thinker and explainer, I found that when I needed a pad of paper to draw a concept I was explaining, I grabbed the iPad instead and used Adobe Ideas to draw.  In the office, I used to drag people into meeting rooms to use the whiteboard, this works better.  Any of the 10-20 slate tools in the app store will fit this need.
* There are so many people complaining about Flash not working on the iPad.  Shut up already!  I have been using [ClickToFlash](http://clicktoflash.com/) for ages on my desktop to get rid of those annoying flash ads and to reduce the number of Safari crashes.  The only time I seem to click through on Flash is for Hulu.  I have not missed a thing on the desktop by doing this and gained a very stable computer.  No flash on the iPad is a benefit, not a problem people!
* Glad to see unified mail coming, the iPad needs it.  The iPad also needs to be able to store more than the last 200 messages per account (except exchange where it seems to store them all).  There is heaps of space on the flash drive, and the search is awesome, so please allow more email to stay on the device.
* In the boneheaded department, I have to place file transfer.  I use MobileMe and iDisk as well as DropBox to sync files, store them offsite and access them from anywhere.  The iWork suite from Apple uses none of these.  To add files to these apps, you need to either email them to the iPad and open them with the app or use iTunes.  What a pain!  The original plan of launching the iPad as a drive on your desktop, or integrating iDisk, DropBox or Box.net is much better - and has been done by several third parties already.  I got [GoodReader](http://www.goodiware.com/goodreader.html) for this and it's great!
* I finally succumbed and purchased some HD versions of my favorite games.  I HATE PAYING TWICE FOR THE SAME PRODUCT!  Fortunately the developers of these apps realized this and made them just so much better.  I expected to feel disappointed and suffer post purchase depression, but I was too busy enjoying the new content or awesome new graphics and sounds.

After a week with the iPad, I seem to do all my reading on it - eMail, web, twitter, news and books.  I also find myself being less distracted when working on the computer (I now turn the interruption applications off), and I find myself reading more when sitting comfortably with the iPad.  Its still a winner!

---

## For Developers

From [Apple's Developer Documentation](http://developer.apple.com/iphone/library/documentation/iPhone/Conceptual/iPhoneOSProgrammingGuide/FilesandNetworking/FilesandNetworking.html), excerpted below.

### Using Wi-Fi

If your application accesses the network using the Wi-Fi radios, you must notify the system of that fact by including the `UIRequiresPersistentWiFi` key in the application’s `Info.plist` file. The inclusion of this key lets the system know that it should display the network selection panel if it detects any active Wi-Fi hot spots. It also lets the system know that it should not attempt to shut down the Wi-Fi hardware while your application is running.

To prevent the Wi-Fi hardware from using too much power, iPhone OS has a built-in timer that turns off the hardware completely after 30 minutes if no application has requested its use through the `UIRequiresPersistentWiFi` key. If the user launches an application that includes the key, iPhone OS effectively disables the timer for the duration of the application’s life cycle. As soon as that application quits, however, the system reenables the timer.

Note: Note that even when `UIRequiresPersistentWiFi` has a value of true, it has no effect when the device is idle (that is, screen-locked). The application is considered inactive and, although it may function on some levels, it has no Wi-Fi connection.
For more information on the `UIRequiresPersistentWiFi` key and the keys of the `Info.plist` file, see “The Information Property List.”

---

*Aside:* Not an iPad issue, but back on the wifi.  I cannot apply the recommended changes to my wifi router at home because Verizon does not allow separate names for each network on their seriously cheap and poor quality FIOS routers.  FIOS - the fastest fibre in the USA - comes with a dedicated wifi router that is b/g combined only - no n option, single antenna - talk about cheap!.

---

Yes, the title of this post is the first line of a Bare Naked Ladies song!  With apologies.
