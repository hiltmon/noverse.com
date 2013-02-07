---
layout: post
title: "Hit by a Bus"
date: 2013-01-14 12:06
comments: true
categories: 
---

*What would happen to my clients and my products if I got hit by a bus?*

It’s a fair question given that I am an *indie*, and not part of a large company full of backup resources. These are things my clients do worry about, and a question all indies need to be able to answer.

*Well, firstly, if I am going to get “taken out”, I’d prefer something better than a dirty old MTA bus. Being kidnapped by a Time Lord would be more fun, forced on to a yacht to sail the world would be a better adventure, or made CEO of a Fortune 500 company would be a great way to give up the indie life.* But I digress.

## Continuity

There are many things I do in order to ensure that there can be product and development continuity if I am no longer able to perform. These include:

### Popular Platforms

I develop all products using common and popular platforms. For example, for servers I use stock standard Ruby on Rails on standard CentOS Linux boxes, running Nginx and Passenger. There are thousands of applications using the same stack, and thousands of competent programmers who can take over the product code base with ease. The same goes for Windows Apps (C#) or iOS (Objective-C). I do *not* use edge versions of development tools or undocumented API’s. I always use the most popular libraries. And I ensure that I use all the same naming and structural conventions for each platform to make it easier on others (and myself) to read.

The benefits of popular platforms are many, including:

* Easy to set up, develop for, deploy and transition.
* Easy to take over a standardized code base.
* There exist many, many documented solutions to issues with the platform.
* There are many, many programmers who can take it over.

### External Source Code

All source code I write these days is hosted on [Github](http://www.github.com) in either my own private repository or on client repositories that I set up as part of the project. Each and every commit I make for each and every component is pushed to Github. The client can access this code at any time, and any other developer authorized by the client can look at it and start using it.

*Any configuration files, settings, and other files required to make the product are included in the source repository*, for both development environments and production environments. For example, the Nginx configuration file is always included so the client can set up their own Linux box to run their own server, or their own computer to enable development.

I also leave a copy of the source code on the production server, in case anything happens to Github.

### Readable Code

{% pullquote %}
I assume that my code is going to be read by others. {" I further assume that the code will be looked at by people who do not know the product and are probably under some pressure to change things. "} As a result, I work diligently to ensure my code is readable and maintainable *in the extreme*, including:

* Using very descriptive names for each item, so it’s easy to know what each variable or class is and does.
* Using a lot of local variable assignments to ensure the logic of each function is clear.
* Filling the code with comments as to what each block of code does, even if it’s obvious to me.
* Ensuring the code is formatted for human readability, clarity and understanding.
{% endpullquote %}

### Maximum Developer Documentation

Before kicking off a project, I document the work to be done in a Statement of Work. It defines *what* the product will do, and is written in such a way that it can and is attached do the contract and is readable and unambiguous to the client. It also makes a great starting point for any replacement.

I write very detailed assembly notes and technical notes that I do not share with clients, but do include in the project folders (See [Project Folder Layout](http://hiltmon.com/blog/2012/06/30/project-folder-layout/)). They exist so I can remember what I did and why I did things, but makes a great resource for those who take projects over from me.

There are notes explaining design decisions, server build processes, development environment setups and weekly notes on all programming done. I even copy in the command lines I use so that anyone can follow them. (See [Assembly Notes](http://www.hiltmon.com/blog/2013/01/03/assembly-notes/) for more).

### Releases and Deliverables

For all product and client work, I issue regular, detailed project status reports covering the decisions made, changes made and features added. I also release all products early and often so the client *grows* with the product as it does. It makes it easy for the client to know exactly where everything is in case of interruption.

I also deliver an additional copy of the current code to clients in a zip file every quarter. This includes quarters where no new development was performed, but support or patches were made.

### Off Site Backups

All project folders, notes and code is also backed up automatically off-site. Should the bus run over my primary computer too, I can always get back to where I was in seconds on a new device. And of course, clients can get the data from these backups if necessary as well.

For a very few clients, I run a sync of their [Project Folder](http://hiltmon.com/blog/2012/06/30/project-folder-layout/) to *their* servers, putting my current data on *their* file servers and into *their* backup processes as well. Most never seem to even open these folders, but are confident that they are there and up-to-date.

## Learning from Product Transitions

Several products that I developed have been taken over by the internal staff of clients. In each and every case, the transition was smooth and tranquil. In fact, many of the things I do for continuity came out of transition processes where we found information was missing or difficult to find.

*No more.*

That’s why I document everything.

In transitions, I work with the replacement team to:

* Access the source code
* Review the available assembly notes
* Set up their own development environments
* Discuss and answer any design, architectural or implementation questions

But if I had been “taken out”, all the answers are already in the project folder and assembly notes.

## The M100 Bus

So if I am personally unable to perform for a client, there is little to worry about. Just grab another programmer, give them the code and the notes, and they will easily be able to catch up and take over. *They may not have my experience or expertise, and will not be as quick and efficient as me, but they will be able to maintain and possibly even complete the product.*

And anyway, I work from home, no busses here.

*Follow the author as [@hiltmon](http://twitter.com/hiltmon) on Twitter or [@hiltmon](http://alpha.app.net/hiltmon) on App.Net.*
