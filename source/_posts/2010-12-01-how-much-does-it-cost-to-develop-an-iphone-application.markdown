---
layout: post
title: "How much does it cost to develop an iPhone application?"
date: 2010-12-01 13:59
comments: true
author: Hiltmon
categories:
- Indie Developer
- Software Designer
---

> This [question](http://stackoverflow.com/questions/209170/how-much-does-it-cost-to-develop-an-iphone-application) was asked, and answered, on [stackoverflow.com](http://stackoverflow.com) 2 years ago, and has been viewed almost 200,000 times.  I was one of the people who answered the question ([click here](http://stackoverflow.com/questions/209170/how-much-does-it-cost-to-develop-an-iphone-application/3927217#3927217)).

There are three components in almost every iPhone app: a server component, a design component and an app component.

### Server Component

The server component of an iPhone app usually takes the most effort and chews up the majority of the budget.  You need to deal with the physical servers, hosting, networking, security, backups, failover, scalability, reliability.  You need to develop databases, servers, API's, migration strategies, load balancing, and backups.  You need an army of people to operate and maintain these servers, support them, enhance them and feed them.  [Instagram](http://instagr.am/) went through half a million dollars just building theirs, [twitter](http://twitter.com/) has spent untold millions on theirs.

Creating a server infrastructure from scratch is something [Noverse](http://www.noverse.com/) can do for you, but it will cost a lot, in the hundreds of thousands of dollars if you outsource the whole lot to us.  In return, you will get a server platform to support your needs, that has APIs that are used by iPhone apps, web sites and internally, is scaleable, maintainable, and supported.

But almost everybody already has some server assets.  These need to be enhanced to provide the API for the iPhone app, exposed and secured on the internet to make the API available to your users, optimized to perform quickly enough for app usage, reliable enough to deal with the user load as well as gracefully fail-over when things go wrong.  Creating the new wrapper interface to an existing set of system is a large project.  Analysis needs to be done to see if the data or API needed for the iPhone is even available in existing systems, or whether these need updates of their own.  Then the new services need to be designed, implemented, tested, secured, deployed and a support infrastructure created.  Cost?  Between $50,000 to $500,000, depending on what works.  _Most clients use their internal IT resources to do this to save money._  Most clients also underestimate the amount of time these internal resources will take to get their part completed.

If you are lucky and the server component already exists, is quick, has an API and is supported (like [twitter](http://twitter.com/) app developers), you'll be saving 60-70% off the total app cost.

### Design Component

You will be surprised at the time and cost of the design component in an iPhone app.  Corporate developers are not used to doing anything more than functional design.  Commercial developers are used to doing that plus UI design.  All of which can usually be done by developers or great systems architects.

But mobile apps require more than just an architecture and an UI, they need a theme, a look and feel, an interaction model, and a lot of graphics.  Third party developers will often quote to create an iPhone app that uses standard Apple widgets, and this not only reduces cost but makes the app look cheap, boring and in many cases, makes it less accessible, intuitive and useable.

Mobile apps need to stand out, need to project your image and themes, and on more practical levels, need to deal with an unconstrained tactile interface.  Action feedback idioms are up for grabs, interaction gestures need to planned and the whole interface needs to be trialed, tested, iterated on and often revisited several times.

For example, when the user presses a buy now button on a product in a shopping app, how can one feed back to the user that the product has been added to the cart?  Using standard widgets, you change the badge (the red number) on the cart icon.  But most users don't notice it, and most tap the buy now again.  Apple's [Apple Store](http://itunes.apple.com/us/app/apple-store/id375380948?mt=8) app transitions the user to the cart tab, greys it out, puts up a spinner to show its doing some work and animates the adding of the item to the cart, then ungreys the screen.  A lot of design went into that.  Amazon's [shopping app](http://www.amazon.com/gp/feature.html?ie=UTF8&docId=1000291661), on the other hand, spins an image from the top to the bottom of the screen to simulate an box being added to the cart.  That works too.  One of my apps peels the product page off the screen and shrinks it down into the cart icon, like the page is being sucked into the cart.  Thats another design.  Which will work for you?

iPhone app design takes at least a month of designer work which I usually estimate at $40,000 per month.  That's if you already have a corporate logo, image and theme, as well as all the raw graphic assets needed.  Add more time to create your image and the app's image if these do not exist.

## App Component

Finally we get to the iPhone app itself.  Once the analysis and app design is done, a 3-4 function app will take about a month to write the core, and two to three months to polish and release.  Add a few months for iterations and testing.  Expect to pay $150 an hour or more per developer at at professional firm like [Noverse](http://www.noverse.com/), or about $50,000 to $150,000 depending on number of functions, amount of animations and  amount of custom interactions needed.


### How much in total?

Assuming the core of the server component already exists, expect to pay between $100,000 and $500,000 to get a _quality_ iPhone app that works with a reliable server infrastructure.  No server needed, then look at about $50,000 to $250,000.

### It can't be that much, really?

You will read elsewhere on the internet that people got apps written for them for under $10,000.  That's probably true.  There will be those who used outsourced international programmers and got apps for under $25,000.  That's true too.

**But**.  There is always the 'but'.

But **none** of these applications have a server component.  **None** of these applications had any design done or interaction model in them.  **None** of them look good.  **None** of them have more than one or two functions in them.  **None** of them have been updated or modified in any way.  **None** of them have had bugs fixed in them.  **None** of them is maintainable.  And **none** of them have made money for their creators or grown their businesses.

If you want a quality iPhone app, that looks great, is intuitive, is reliable, bug free, maintainable, updateable, and works reliably with a server platform, prepare to spend several hundred thousand dollars on professionals.
