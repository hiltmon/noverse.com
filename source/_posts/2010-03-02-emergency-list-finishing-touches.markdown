---
layout: post
title: "Emergency List - Finishing Touches"
date: 2010-03-02 17:24
comments: true
author: Hiltmon
categories:
- Software Designer
---

_Part 6 in the continuing the story of my first iPhone application as an Indie Developer, starting with the [requirements]({{ root_url }}/blog/2010/01/the-first-application-emergency-list/), the [design]({{ root_url }}/blog/2010/01/first-draft-application-design-emergency-list/), [first iteration]({{ root_url }}/blog/2010/02/emergency-numbers-core-functionality-in-one-week/), [updated UI]({{ root_url }}/blog/2010/02/emergency-numbers-updated-ui/) and last week's [internals and bells]({{ root_url }}/blog/2010/02/emergency-numbers-internals-and-bells/).  In short, I am documenting all the successes and failures in developing my first iPhone app._

## The Web

I added the following pages to [noverse.com]({{ root_url }}):

* **Created a Products Page**.  All it does is list my (currently one and only) iPhone app.  Its really not necessary while I am a one-app wonder, but I do want to structure the web site so that I can cross market products and having a single products landing page will do this.
* **Created the product page for Emergency List**.  I wanted this page to sell the product, but I dod not want it to become too busy.  So I created a top space to say what the product is, its key features and how to use it.  I then added links to the app store, support and comments.  Finally, I added a getting started block to help users create their first contacts.  The legal stuff is really unnecessary when dealing with intelligent folks, but...
**Created the [Support]({{ root_url }}/support) page**.  I want users to comment and request help via email.

I also changed some of the layout to add sidebars so that the products remain on the users screen wherever they are on the site.  The more they see the app name, the more opportunity to click and use it.

## The App

I really spent some time on the graphics, especially the default image that appears on launch and on the first run experience screen.

Apple HIG recommends you use a snapshot of the running app when launching, but then the app really does not stand out.  I created a default image thats darker than the first view, and added some basic logo information to it.  When the user launches, they now get a dark screen that lightens up as soon as the app is ready.

The first time the user runs the app, there will be no buttons.  Instead of having a blank screen, I added a nice image with instructions on how to get started.

### The Name

So it was ready to go out.  I logged in to iTunes Connect and, blast, Emergency Numbers was already being used as an app name.  So I tried a few others until _Emergency List_ came up clean.  That meant that all the graphics and documentation needed to be changed.  A quick recompile and test later and it was ready to upload.

### The Release

Releasing the app was really easy once the certificate part was completed.  You need to request a distribution certificate for the app, then download, install it and rebuild the app with it.

They have a series of web forms to complete.  Make sure you have a large icon, the copy you'd like to see on the web and some screenshots handy before getting started.  The upload process was smooth and it was not long before I received an email that the app was under review.  Two days later and its was on the store.

### Since Then

The app has been downloaded about 200 times over the last 4 days. I have already received some feedback on it and am working on a big update to satisfy these users.
