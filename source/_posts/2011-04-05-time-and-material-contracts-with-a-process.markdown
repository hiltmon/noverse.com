---
layout: post
title: "Time and Material Contracts, with a Process"
date: 2011-04-05 11:48
comments: true
author: Hiltmon
categories:
- Indie Developer
---

> Call in a contractor to fix a hole in your roof.  On a fixed price contract, they will rush to the roof, staple a plastic sheet over the hole and be done in 10 minutes.  On a time and materials contract, they will wait for permission to go onto the roof, and sit up there for hours texting their mates, then staple the plastic sheet.  On an equity share contract, they will move in, and place a bucket under the hole.

Noverse LLC always uses Time and Materials Contracts for engagements, never fixed price or equity share agreements.  So why is that?

### Why Contracts?

Seems like a silly question, but many, many indie businesses do work to a verbal agreement or handshake.  And both parties usually get screwed.  The client often feels that they did not get the work they asked for, or it took too long and should not pay (nor do they have to), and the indie feels they did do the work and should get paid (whether or not they deserve to).  There is disagreement on rates, payment schedules, deliverables, timing, you name it.  Since no contract is in place, both parties are aggrieved, but there is no solution.

At Noverse, we love our clients and we love our contracts.  This is a business after all, and the contract ensures that both parties, us and our clients, know exactly what the business is, what payments are agreed, what deliverables are acceptable, what timeframes are due and what do do if things go wrong.  With a contract in place, we can all get onto the real fun stuff like actually designing, developing and delivering awesome software together.  With a contract in place, everyone knows the what, the when, the who and the how of the engagement.

### Why Fixed Price

Fixed price contracts are those where an agreement is reached for a stated set of deliverables for a single given invariant price.  Fixed price contracts often include payment schedules, time limits and strongly worded penalty clauses.

Fixed price contracts are great when the deliverables are well known and understood, where the service has been done before and where the supplier and client are both confident that it is achievable.  Fixed price works great installing swimming pools, where the supplier has installed hundreds and knows the work involved _because they have done it before repeatedly_.  Fixed price works great when the supplier is delivering a manufactured item, like airplanes or other machinery, or performing a service with known parameters like mowing the lawn every week, or when the supplier can provide the same service or product to multiple clients without changing the service or product.

Fixed price fails when there is design, creativity or a lack of clarity in the deliverables.  No one knows how long it will take to design a new advertising campaign, or create a web site where the content has yet to be defined.  Fixed price fails when the scope of work is unclear, such as when asking an architect to design a building or asking a research team to come up with a new medicine.  And fixed price fails when the process requires iteration, which is why contract lawyers never use fixed price to handle negotiations.

Fixed price is generally good for the client, especially if they can nail down the deliverables clearly.  The client gets a predictable product or service for a known price in a known timeframe.  It's not always good for the supplier if high client involvement is required as the client is not incentivized to achieve the same timeframe.

## Why Equity Share

Equity share contracts are those where an agreement is reached for a stated set of deliverables in return for an equity stake in a company instead of payment.  This is common in startups and in single purpose businesses (companies created for a single engagement).  The client does not have to fund the product or service and the supplier gets a share in the long term income of the startup or completion income for the business.  This works great if the startup is successful.  This works great of the single purpose business wins the deal.

But most of these deals fail.  Startups are invariably not successful.  For each success we hear of, there are hundreds if not thousands of failures.  Single purpose businesses, like startups, rarely make money, but when they do, they do well.  Since the client does not have to fund the work, it's good for them.  Since the supplier is carrying the risk of no return in the deal, its usually bad for them.

## Why Time and Materials

Time and materials contracts are those where an agreement is reached for a stated set of deliverables while reimbursing the supplier for their fixed and variable costs with a markup.  These contracts are great where fixed price contracts are terrible.  Contracts to create new products, design new things, do stuff that has never been done before, or even just see if something can be done, are perfect candidates for time and materials.  The deliverables might be known, but the time and effort required to achieve those deliverables are unknown.

This is not as good for the client.  At the start, they have no idea what the total contract cost will be, and it sure is hard to get budget for a variable contract.  The client also has to trust the supplier not to waste their time and money when, technically, there is no incentive for the supplier to work quickly or efficiently.  Its good for the supplier as they can work without pressure, iterate and spend whatever time they need to get the deliverables done to client satisfaction.  Of course, a lazy supplier still gets paid under this contract (although they will never get another contract with the same client).

Noverse does time and materials contracts because we never know the _true_ scope of work.  Oh sure we know what the end deliverables should be, but how to get there is usually unclear.  Software design is a learning experience for both us and the client, and there is no way to know how long for sure it will take to do it properly.  Software development is also unpredictable, no way to know what problems and issues will arise.  And invariably, the client environment is not static, their needs do change as they learn more, as their business evolves and as the software starts taking shape.

## How we make Time and Materials palatable

Since time and materials contracts are generally supplier (that's us) friendly, here are the things we do at Noverse to make sure that these engagements do not get away from us and end up costing our clients more money.

* **We start with a Statement of Work**, that expressly defines the deliverables and limits the scope of work.  We agree up front, and attach to the contract, what the deliverables will be.  This limits the scope of the engagement to achieving those deliverables and nothing else.  Often, our Statements of Work also state things that may be assumed deliverables and explicitly remove them from scope.  This protects the client in that they will only be spending money on us delivering that which they want us to deliver.
* **Then we make an estimate**.  Its a guess in many respects, but the best we can at the start.  That estimate is used as a basis for the engagement time and payment schedules.  And we apply ourselves as if that estimate was a fixed price agreement.  We report weekly on time consumed against estimate, trying to match or beat the estimate.  We continually retune our work and focus to get back on track.  Clients like this as they have set their expectations on the estimate and we are continually trying to beat those expectations.
* **Release early and release often**.  Sometimes daily.  As each new module grows, Noverse releases it to the client.  This is great for the client because they have something to play with, something to discuss and they can objectively watch our progress.  This is great for us because we get feedback early when its easy to change and fix things, and it keeps our clients very involved in our work.  It also helps in cases where we have misunderstandings in functionality or direction as these are made apparent early and are fixed early, enabling us all to remain on track.  The best response from our clients on a release: "This is great, where's the next bit".
* **Spike the critical areas**.  One of the things we do early in an engagement is try to identify the areas where we have the least understanding or perceive the most risk in implementing.  Maybe there is an interface we are unsure about, or a calculation that we're not sure what it should be or how it works, or a data set that may not be clear. In these cases we start with a few spike solutions to implement those problem areas. We'll write a small program to do that interface, implement that algorithm or load that data set.  In doing this, we spend a little more time at the start of the engagement tackling the big and nasty problems.  This is good for us as once the nasty problems are solved, the rest of the delivery is easy (usually).  This is great for our clients because any issues and clarifications are dealt with early, and any changes are identified early.
* **Value and manage change**. We're all learning as we design a product, as we develop a product, as as the client gets their hands on the growing product.  And as we learn, so the scope and nature of the deliverables changes.  Sometimes this makes the engagement longer and cost more, sometimes less.  Since we have an estimate, Noverse ensures that all changes are reported and the estimate is continually updated to reflect the new changes.  That way, clients are happy because the variation is known and agreed, and expectations are adjusted.
* **We sometimes say no**.  That's right, we say no to implementing features we believe are unnecessary, we say no to designing and developing modules that are not needed.  Noverse has the same passion to create a great solution for the client as the client does, and we apply all our knowledge and experience to achieve that goal.  But many clients add features (and therefore time and cost) to engagements when these features are not needed.  Noverse advises our clients when we think these are extra's, bells and whistles, or unnecessary features.  The first time it happens, the client is shocked and surprised.  But after that, we always get appreciation.  And it helps us both rein in time and materials contracts.

So next time you are offered a time and materials contract, look at the process.  Look at how the supplier tries to make it work for you.  Look at how transparent the supplier is. Time and materials contracts, coupled with a great process, are the best solution to independent software design and development for both clients and indies, and thats why we do it at Noverse.
