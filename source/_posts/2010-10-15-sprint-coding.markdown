---
layout: post
title: "Sprint Coding"
date: 2010-10-15 13:42
comments: true
author: Hiltmon
categories:
- Indie Developer
- Software Designer
---

Sprint Coding is the process whereby a skilled programmer busts out a quality application in record time.

Its not easy.  Fast coding means faster bugs.  Quick coding means rotten quality. Rapid development means architecture is ignored.  Cowboy coding produces unmaintainable code.  In short, I don't recommend it.

But, my dear [padawan](http://starwars.wikia.com/wiki/Padawan), it is do-able under the right circumstances.  Rare circumstances.  Recommend this, I do not.

### Scenario, this is.

A client called up at the beginning of October and asked if I could produce an iPhone app for them.  _I can._ The app is to represent their brand on the iPhone and allow users to purchase goods from them.  _Sure._  It needs to look great and be bug free.  _Of course._  And it needs to be in the app store in November!  Mid-November OK?  Hello? You still there?

_Mid-November!_  Assume a 2 week review process and a 2 week beta test, the app had to be written in, yup, 2 weeks.

Possible, it is not!

Unless sprint coding, we do.

### Sprint coding, conditions these be

I quickly ran through my sprint coding checklist to see if it was do-able:

* **I have the time?** I would have to give up on all other commitments and get it done.  **Time Check!**
* **The client has an API?** Client-server software is hard, writing a server API takes time.  If the client does not have a tried and true server API, you'll never make a sprint timeframe.  This client did.  **API Check!**
* **The client has art and designers?**  Art takes time, good design takes time and thematic design is critical to present a brand correctly.  The client needs to have its own art assets (logo, color schemes, thematic elements) already made.  And the client needs to make their graphic designers available 100% of the time during the sprint to deliver images, icons and artwork required by the app.  Most clients use third party designers, who cannot make this commitment.  This client has its own internal art department, and placed them on call.  **Art Check!**
* **I already have a architecture?**  As a developer, I needed to make sure I had an architecture already in place that would enable a sprint code.  I have made tab-based apps before, I have made client-server apps before, I had the architecture.  **Architecture Check!**
* **Do we know all the features that the client wants?**  I needed to know all the features the app would have, needed to limit them to what's do-able, and needed to know if I had made similar features before. Knowing the feature set, I needed to be confident that I could implement each and every agreed feature in a sprint timeframe.  Search for product, present product, browse specials, cart, checkout, I had them all.  **Features Check!**
* **I already have the libraries needed?**  Libraries are needed to interface to the client's API, and parse their responses.  Libraries are needed for the few custom controls that make up a shopping application.  Libraries are needed for payment processing.  Creating these from scratch requires time and resources and a massive testing platform, not something that is conducive to sprint work.  In this case, the client plans to web-host the payment platform (a huge relief), which they already have, and use JSON and REST interfaces.  **Libraries Check!**

Possible, it may be.

### Sprint coding standards

Remember when I described Sprint Coding as something performed by a **skilled** programmer?  Here's why.

A skilled programmer never relents on

* **Coding to a known architecture.**  Data and logic in the model, display in views, controllers to manage.
* **Using proven design patterns.**  Façades for API interfaces.  Delegates for decoupled integration.  Observers for app level notifications.
* **Object-oriented abstractions.**  Data objects, with validation.  Interfaces and protocols between subsystems.
* **Naming conventions.**  Naming of classes and variables, namespaces if necessary.  Think readability and maintainability.
* **Coding standards.**  All code files look and feel the same, same header, same style, making the code readable and maintainable.
* **Keeping it simple.**  No fancy coding, no obfuscation, no funky algorithms, just good clean readable code.
* **Ongoing refactoring.**  Instead of copy and paste coding, a skilled programmer refactors on the fly.  Even in a sprint, a skilled programmer knows the pitfalls of duplicating code and catching bugs in all copies.
* **Fast testing.**  No time to create a full test suite?  That's OK, as long as all assumptions are wrapped in assertions, all errors reported, logged and handled.  And the sprint is followed by a beta test.

How I work, this is.

If you're going to sprint, and your skilled programmer does not do all of the above, the result is going to be an incomprehensible mess, full of bugs and completely unmaintainable.

### Sprint coding process

Sprint code an application using the following steps:

* **Construct the architecture.**  Create the main classes, the master model and the core interaction controllers.  These are the backbone of the application and will be the hardest to change during the next steps of the sprint.
* **Complete the skeleton.**  Flesh out the architecture using proven patterns and conventions to create all the necessary working parts of the application.  Create blank screens, empty data objects, empty API façades and string them together.
* **Build the flows.**  Code the application up so that each and every workflow can be run.  In a store app, that means search results in products that can be looked at and purchased, cart items can have quantity changed, checkout launches a secure web browser.
* **Harden the API.**  Work through all use case scenarios using the API to make sure it all works.  And try to break it to make sure the app does not crash on exceptions or lack of connectivity.
* **Fill in the details.**  In the above sections, the product object probably consists of an ID and a name, nothing more.  Add pictures, descriptions, reviews.
* **Polish.**  Integrate the art, tighten up the theme and add detail the app. Test will all kinds of data to make sure the app looks great at each step on the flow.  Test all the interactions to make sure they work right and look great.

But most importantly

* **Check code in regularly.**  In a sprint, you're going to be rewriting swathes of code over and over again, screwing up and needing to go back and see what worked before.  Use the SCCS and a great file comparison tool to get back quickly.
* **Report progress daily to the client.**  I email the client at the  end of each sprint day describing the work done that day.
* **Show it!**  I use [ScreenFlow](http://www.telestream.net/screen-flow/overview.htm) to create videos of the daily progress and send them to the client, or I use [Skype]() video to show the app live.  As soon as the client's App Store ID is established, I also send alpha _ad hoc_ builds daily for the client to play with.
* **Talk with the client at least once a day.**  I also make sure I have a conversation with the client daily.  Issues and questions arise as the sprint moves forward, art and API changes need to be communicated.  Feature details need to be clarified.

### No Beta, no Sprint

Once the sprint is complete, you should have a fully working app that looks and works great.  But no matter how skilled the programmer, no matter how good the API, _it will not be ready for prime time_.

[Beta testing is important]({{ root_url}}/blog/2010/07/beta-testing-is-hard-but-oh-so-worth-it/), beta testing a sprint is even more so.

During the sprint, the programmer and the client are usually the only people looking at and touching the software.  And two people does not a good test sample make.

The speed of sprint means that the code will not be bulletproof.  The speed of the design means that the flows will not be idiot proof.  Code bugs, interaction issues, flow problems, and things missed by the two primary individuals will abound.

Take a sprint app, throw it at tens of committed beta testers and ride them hard to identify odd behaviors, crashes, bugs and interactions.  Send out several beta builds, all fully instrumented, and request logs back from all testers to see what happened, even if it all worked.

And then, two days before submitting it to the app store for review, send out the final build, in release mode, to all beta testers for a final end-to-end test.  Once you strip debug and instrumentation, you sometimes get some new oddities cropping up.

### In this case

In this case, the client and I had all the items on the checklist.  

So I took the assignment.

And for the last two weeks, I ran a sprint.  I reveled in architecture, I rollicked in the model, I danced on the API façades, I sung the views into existence, I brushed the theme into place and I ran with the coding bulls.  I was on the endorphin high of sprint coding.  And I loved every minute of it.

And now, the app itself is mostly ready for Beta, just 2 weeks later, sprint over.  Back to ground, I came.

But the client API had a few holes in it that we found towards the end of the sprint.  The API team is working on it.  But each day they work on it, delays the beta and final release.  Disappointed, we feel.

And once again, my dear [padawan](http://starwars.wikia.com/wiki/Padawan), I remember why I do not recommend sprint coding.
