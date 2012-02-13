---
layout: post
title: "Alpha Testing"
date: 2011-07-31 15:36
comments: true
author: Hiltmon
categories:
- Software Designer
- Tools and Techniques
---

Everybody talks about Beta testing, unit testing and integration testing, but there is little on Alpha testing out there.  At Noverse, we do them all.

### What is Alpha Testing?

If you follow the Wikipedia definition, [Alpha](http://en.wikipedia.org/wiki/Software_release_life_cycle#Alpha) testing happens when the product is incomplete and yet still handed over to a testing team inside the organization.  And Beta testing happens when the customer gets to test pre-release versions.

For us, a small indie developer, we have no separate testing or Q&A team, so our Alpha testing is done with our customers as well.

### How do we run it?

We follow the agile software practice of [release early, release often](http://en.wikipedia.org/wiki/Release_early,_release_often).  As soon as we have sufficient framework to run the application and as soon as the first features emerge, we release the product for Alpha testing to our customers.

We tell our customers what we are doing and what to expect.  Incomplete software, workflows that only have the first steps, links that go nowhere, forms that do not save data and buggy software are all part of Alpha testing.

Every time a feature is added or completed, and its automated test components added, we issue a new Alpha release.  We email and publish release notes to point out what's new and needs to be looked at.  And we solicit feedback on it.

### Why do we do it?

Alpha testing is as much about testing as it is about feedback.  With 'release early, release often', the goal is to bring the customer deep into the process of development and to give them a platform to comment and feedback upon.  For customers, having an incomplete process or half-done screen to point at and prod makes all the difference in being able to communicate with us Vulcan developers.

By calling it testing, we give more and we get more back. We start to track feedback as bugs, and document the fixes and changes in source code control and in tests.  We solicit feature requests and changes earlier in the development process so we can plan future work and directions better.  And we provide the tools and practice to our customers to look at the application closely and critically, enabling them to provide better and more meaningful feedback.

I always say that the best response we get from our customers on each Alpha release is "This is great, where's the next step".  But the truth is that the best responses we get are clarifications on our misunderstanding of the needs or flow, changes in terminology or naming, or the identification of new and unique bugs that we did not see so early in the process that they are easy to address before they become structural.

### What do our customers think?

Most customers feel pressure when it comes time to test.  They have no experience with testing or accepting software, know not where to start or what to do.  With Alpha testing it's a lot easier on them.  There are fewer features to play with, fewer screens to look at, and the release notes guide them where to play next.

And they love it.  They jump on each release, work their way through the flow to the new features, poke and prod at them, ask questions of us and give us awesome feedback.

And when it comes time to move on to Beta testing, they are already familiar with the product, with testing, with reporting bugs and requesting features.  Nothing to fear here.

### Right now

Over the last 10 days, I have published the first 3 Alpha releases of our new product to the team.  And they are happily going at it, finding features, discussing flows, thinking about naming and asking where the next feature is.  As it should be.

So in your next project, instead of waiting until you think you have a full, bug-free and complete product, try Alpha testing.  Send out the screens and flows as you develop them, the incomplete and unstable, your customers will be more involved, will learn to test better and you will get better feedback.  And build a better product.
