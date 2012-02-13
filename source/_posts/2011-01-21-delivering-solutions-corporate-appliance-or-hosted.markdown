---
layout: post
title: "Delivering Solutions: Corporate, Appliance or Hosted"
date: 2011-01-21 16:22
comments: true
author: Hiltmon
categories:
- Indie Developer
- Software Designer
- Techie
- Tools and Techniques
---

I have just spent the past few weeks working on the initial design of a new product for Noverse.  The question was how to deliver the solution to our customers.  We could:

* Install it on their infrastructure - lets call that the "Corporate Model"
* Deliver a prebuilt computer with the software on it - lets call that the "Appliance Model"
* Host it on our gear accessible over the internet - lets call it the "Hosted Model"

Lets look at each in turn.

## Corporate Model - Install on their Hardware

This is actually the easiest for us to do.  All we have to focus on is to write the software.  It is up to the customer to get the right equipment, integrate it into their network, install any prerequisites we ask for and to support and maintain this hardware.  We can then come in, install our code and we're done.

Choose this model when the software is complex, uses prerequisites that the customer's IT team can handle and when the software needs a ton of iron to run.

### The Good

* We do not have to pay for hardware and licenses
* We do not have to support the hardware and prerequisites
* We do not have to worry about network or LAN integration
* Security and backups are not our problem

### The Bad

* When things go wrong, is it our software or the platform?  Who needs to fix it?  If it's the software, it's us; if it's the platform, it's them.
* What if the customer has no IT staff?  Or the existing staff have no experience with our chosen platform and prerequisites?
* Customer IT staff are responsible for installing updates.  They can delay it or choose not to even do it.

## Appliance Model - Install and Deliver Prebuilt Computer

This is a great solution.  Apple's Mac Mini Server configuration is awesome.  A Unix operating system, open source server components fully integrated and working on a tiny device that does not need a computer room to run.  We could set up the application on it, ship the Mini, and all the Customer has to do is plug it in, plug in the LAN and turn it on (and install any client software to talk to our server).

Choose this option if your platform is not one that the customer IT people understand, when they have no IT staff and when you need a really rich environment.

### The Good

* We have a guaranteed stable platform that we control
* The customer just plugs it in and turns it on, and does not need a computer room to run it
* Customer IT staff cannot mess it up
* Security is simple, backups are easy, requiring the customer to plug in a USB drive occasionally

### The Bad

* We have to support and maintain the device, likely requiring the customer to punch a hole in their firewall so we can gain access, not an easy task for most.
* We need to maintain hot spares and pay for fast shipping when devices fail on customer premises (and hope they backed up the old system before it failed)
* The device itself needs internet access to receive updates
* When we are successful, there could be heaps of these out there, will be hard to track

## Hosted Model - Run it on our Gear over the Internet

We setup servers and install our software, making the servers available over the internet to our customers.  We could colocate our own hardware or use a RackSpace, Linode, Heroku or SliceHost to do it dynamically.  All the customer has to do is access our software as a web application.

Choose this option when you expect to have a lot of small customers, when the software is simple or when you want to reach the world.

### The Good

* We have a guaranteed stable platform that we control
* The customer needs only a web browser to access our awesome software
* It's easy to add new customers
* All customers get all updates as soon as they are available

### The Bad

* We need to maintain security and backups
* We need to manage scaleability, ensuring our customers do not face slowdowns, not a problem in the other models
* There are some things that you cannot do easily with web apps, and in this case, our customers are used to rich desktop software
* We eat the hardware and network costs

## Our Decision

Most of our customers for this product will be small organizations that do not have IT teams.  Hosted is the best solution for them, so that's what we'll do.  We will need to make the solution very simple and user friendly to make their user's comfortable in the browser.

---

**Not the bloody 'Cloud'!** Note that I have not used the dreaded 'cloud' word above.  I'm an experienced and professional systems designer and I have no idea what this mystery 'cloud' thing is.  I assume its the icon used in network diagrams to represent the Internet.  I do know about virtual servers, hosting and colocation.  I work in the real world.  We'll use those.
