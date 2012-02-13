---
layout: post
title: "Emergency Numbers - Internals and Bells"
date: 2010-02-19 17:53
comments: true
author: Hiltmon
categories:
- Software Designer
---

_Part 5 in the continuing the story of my first iPhone application as an Indie Developer, starting with the [requirements]({{ root_url }}/blog/2010/01/the-first-application-emergency-list/), the [design]({{ root_url }}/blog/2010/01/first-draft-application-design-emergency-list/), [first iteration]({{ root_url }}/blog/2010/02/emergency-numbers-core-functionality-in-one-week/) and last week's [updated UI]({{ root_url }}/blog/2010/02/emergency-numbers-updated-ui/).  In short, I am documenting all the successes and failures in developing my first iPhone app._

## Internals

I spent one day rejigging the data model for the app, without changing the data file format.  The original model had methods for each and every attribute of an emergency contact, such as `currentContactName`, `currentContactIcon` and `setCurrentContactNumber`.  Now I have a contact object with `name`, `number` and `icon` properties and only one method on the model, `currentContact`.  Model validation was also moved to the contact object.

The favorites screen, now called Quick Call, has been refactored to speed up the generation of buttons and to display a startup screen if no buttons are visible. 

Other odds and ends changed are that titles have been added to the lookup views, and you can add contacts from the address book by picking  contact numbers.

### Add Contact from Address Book

When the user taps the plus on the Emergency List, the app now asks the user:

{% img /images/NEN-AddContact.PNG 160 240 %}

The user then has to choose a contact and a phone number to add it to the emergency list.  This required implementing address book pickers and setting the display to only show contact numbers.

### Bells

I renamed favorites to Quick Call, seemed to make more sense to first time users.  I then added a new first use screen to the app, an icon and a default launch screen.

**Quick Call and First Use**

When no buttons are chosen, such as on first use, the user now sees:

{% img /images/NEN-QuickCall3A.PNG 160 240 %}

If buttons are chosen, it looks like this:

{% img /images/NEN-QuickCall3b.PNG 160 240 %}

### Icon and Default Screen

The HIG requires all applications to launch with a default screen that looks like a blank version of the first display.  So I created a default screen with a set of blank gray buttons.

{% img /images/NEN-Default.PNG 160 240 %}

It looks OK when all the buttons are filled in the app because it looks like the grays get filled with color on launch.  But it seems to linger on the screen on the old iPhone 3G and on the iTouch, so the user may want to start tapping.  So I added the icon and name to the default display and darkened the whole thing.  It also merges nicely to the first use screen.

{% img /images/NEN-Default3.PNG 160 240 %}

## So Am I Done?

Getting closer, but I still need to

* Add more button colors
* **NEW**: Create the marketing and support web sites, especially now that the URL is on the first use screen.
* Make the first call from the app

## Next Step

Get the web site up.  An indy's work is never done.
