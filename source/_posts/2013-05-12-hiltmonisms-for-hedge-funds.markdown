---
layout: post
title: "Hiltmonisms for Hedge Funds"
date: 2013-05-12 14:33
comments: true
categories: [ Hedge Fund Systems ]
---

<span class="light">This post is another part in a series on [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/), a series of posts based on my experience in the design, implementation, issues and thoughts involved in crafting an end-to-end platform for a complex Hedge Fund.</span>

One of the things I have been writing about on my personal blog over the past few years is a set of [Hiltmonisms](http://hiltmon.com/blog/categories/hiltmonism/) - a bunch of maxims based on the collected experiences of my mentors and my own - on how to best create software and systems for businesses.

In this series on [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/) I have referred to these maxims in passing. In this post I spend a bit of time looking at the [Hiltmonisms](http://hiltmon.com/blog/categories/hiltmonism/) most applicable to Hedge Fund systems software design and development.

<!--more-->

* **Be [Close to the Business](http://hiltmon.com/blog/2011/12/01/hiltmonism-close-to-the-business/)**: The designer of the Hedge Fund's systems needs to be close to the business, to understand its needs, nuances and flows. Traditional IT is kept at arms length, which explains why traditional IT systems suck so badly. A technology team that is close to the business can make better choices in systems and design better systems for that business.
* **[Automate or Die](http://hiltmon.com/blog/2011/12/04/hiltmonism-automate-or-die/)**: Computers are very good at performing dreary repetitive tasks without making mistakes or getting sick, people are not.  People are great at dealing with problems.  Let the computer do the heavy lifting, let the people deal with the edge cases, and you can keep your headcount down.
* **Present [Information, not Data](http://hiltmon.com/blog/2011/12/06/hiltmonism-information-not-data/)**: A screen full of raw data numbers is absolutely useless to users. A summary, a graph, a color, a custom view that answers a specific question instantly are brilliant. Data is great to have, and is needed, but information is what needs to be presented.
* **[If it ain't broke, break it](http://hiltmon.com/blog/2011/12/17/hiltmonism-if-it-aint-broke/)**: The market changes, the business changes, regs change, needs change, and there is no such thing as a system that can handle all this change without breaking. So if it ain't broke, something else is being stressed to keep it working. If it ain't broke, it should be, so break it.
* **Live with [One version of the Truth](http://hiltmon.com/blog/2011/12/23/hiltmonism-one-version-of-the-truth/)**: Ever had a situation where two systems report different results for the same data. This should *never* happen. There should always be one and only one place to input and edit a data element, and this data should be used everywhere else without the ability to be changed.
* **Run [Operations by Exception](http://hiltmon.com/blog/2012/01/23/hiltmonism-operations-by-exception/)**: Related to [Automate or Die](http://hiltmon.com/blog/2011/12/04/hiltmonism-automate-or-die/), design your business such that the computer handles the regular stuff and your people handle the exceptions. And then take it to the next level, the people handle *only the exceptions*. It makes for a happier and more productive crew.
* **Technology should [Lead the Business](http://hiltmon.com/blog/2012/08/01/hiltmonism-lead-the-business/)**: Being [Close to the Business](http://hiltmon.com/blog/2011/12/01/hiltmonism-close-to-the-business/) is great, but that vision is blinkered to current business needs. Business grow and change, and the systems should be ready, willing and able to handle that change. If the fund plans to do something in the future, the systems need to be prepared now. Or looking at it another way, the systems should enable the business to grow and change in new ways, ways not predicted or thought of by the management team. Of course this also means that systems should never, ever hold the business back.
* **[Minimize the Glue](http://hiltmon.com/blog/2012/10/08/hiltmonism-minimize-the-glue/) between systems**: Glue code is code that glues disparate systems and processes together, and happens to be the most likely culprit in causing systems or process failure that leads to business interruption. The less glue, the better your systems are and the lower the chance of interruption.
* **The [Flow is the Functionality](http://hiltmon.com/blog/2012/11/27/hiltmonism-workflow-is-functionality/)**: It's easy to get distracted by tables and tables of features in a system, but at the end of the day, business is a process and a flow. The best systems implement the flows you need without the complexity of featuritus. An ERP system can do anything, but a basic accounting package with excellent workflows may be all you need.

With these maxims in mind, Hedge Funds can start to treat their systems and technology as enablers, business opportunities, core competencies and something to get right, instead of just treating them as a cost, cop-out or confusing mess.

Investors that meet fund managers that take the philosophy of their systems and processes seriously feel more comfortable, and trust the results of those systems and processes more readily. Fund managers who do not understand their systems or do not have a plans and a philosophy for their processes are a concern to investors and counterparties.

<span class="light">*For more [Hiltmonisms](http://hiltmon.com/blog/categories/hiltmonism/), check out my personal blog [here](http://hiltmon.com/blog/categories/hiltmonism/).*</span>

<span class="light">*For more in the series, see [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/) or [Hire Us]({{ root_url }}/hire-us) to help you with your Hedge Fund systems needs.*</span>

*Follow the author as [@hiltmon](http://twitter.com/hiltmon) on Twitter and [@hiltmon](http://alpha.app.net/hiltmon) on App.Net. Mute `#xpost` on one.*