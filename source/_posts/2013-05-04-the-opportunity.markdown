---
layout: post
title: "The Opportunity"
date: 2013-05-04 16:48
comments: true
categories: [ Hedge Fund Systems ]
---

 <span class="light">This post is the first part of a series on [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/), a series of posts based on my experience in the design, implementation, issues and thoughts involved in crafting an end-to-end platform for a complex Hedge Fund.</span>

The year was 2004 and I was being offered a new job to be the Chief Technology Officer of a brand spanking new Hedge Fund that would trade *everything* and launch within 6 months. Would I be interested in creating and managing a completely new technology platform to handle the end-to-end business needs of this new Wall Street firm?

Would I? You bet I would!

This is the story of how I got the chance to design, create and grow a new financial business's technology platform from scratch. And as amazing as it sounds, it all happened, it's all true.

<!--more-->

## Why Me?

Before I get into the how and the what, *why* were they even talking to me? *Why* me?

{% pullquote %}
{" Because I had done it before. "} I had already built an end-to-end platform for a Hedge Fund. This was not going to be my first rodeo.
{% endpullquote %}

Back in 2000, in Tokyo, I was hired to do a short-term project for a Hedge Fund there. I guess they liked me because they asked me at the end of the project if I could stay on and do other projects for them. And I agreed. And not long thereafter they hired me as full-time Chief Technology Officer (CTO).

This initial project set me on the path to both learning about the finance industry and to building my first end-to-end Hedge Fund platform. And since I did not know any better, I went for it.

Between you and me, and with perfect 20/20 hindsight, my first platform for the Tokyo firm was not very good. I was naive, and did not know or understand the industry, how trading worked, or what risk was. I did, however, understand the accounting side of the business from previous work as a Project Manager implementing financial ERP systems.

So my first cut was a front end to an accounting package (which seems to be the common model these days), focusing on the back-office's needs and reports and failing to please my traders.

But in making this first platform, I learned the core business processes and problems, and realized that there was much more that needed to be done.

So I embarked on a complete platform rewrite and restructure. For this, I turned back to my workflow roots. And with 20/20 hindsight, this attempt was a far better effort.

{% pullquote %}
{" My second version of the platform was just perfect for the Tokyo fund "},   which traded treasuries, futures and swaps. It handled the front-end trade and settlement workflow, it processed the communications and it delivered all the needed data to back office and risk. And when they decided to add a US Office and US trading, the system was ready. And when they decided to add high-frequency trading, it too was ready. And when they decided to go into feeder funds and property investments, the system was easy to adapt. As the fund grew, so the system grew to enable that growth.
{% endpullquote %}

Back to the interview.

So this new startup fund was talking to me because I had done this kind of thing before. It was rare then and still rare now to find a resource *with experience* to build Hedge Fund technology from scratch. And even rarer to find principals who understood the importance of technology and wanted to do this.

## Plan 0: The Architecture

On the call scheduling the interview, the principals of this new fund described the kind of fund they wanted to create. This fund would trade pretty much everything, including a lot of challenging, esoteric and complex financial instruments. It looked something like this:

{% img /images/asset-class-spectrum.png 700 455 %}

They wanted to start with a large fund mindset, and run the business on an institutional-grade infrastructure in order to meet investor needs, due diligence and to create investor comfort. They wanted the right technology up front to enable this kind of fund and to ensure smooth running and excellent control.

{% pullquote %}
By the time I arrived at the job interview, I had planned and drawn out a technology architecture flow for the firm based on my own opinions as to how a large diverse asset manager should operate. {" It was *the ideal*, my idea of how a Hedge Fund and it's technology *should* work. "} In a nutshell, it was workflow based, tightly integrated, and designed to flex and scale.
{% endpullquote %}

I presented this architecture at the job interview, and I'm sure the napkin I redrew it on still exists in the files of one of the principals. As it turns out, my prospective employers thought the same way. They too wanted to build a new type of fund and wanted an ideal and solid platform to run it on. So they hired me.

{% img /images/hedge-fund-platform.png 700 459 %}

This day 0 architecture did not change. We designed and built the business and its technology based on it. And it worked.

See [A Hedge Fund Technology Architecture]({{ root_url }}/blog/2013/05/a-hedge-fund-technology-architecture/) for more information on the architecture's objectives, structure and implementation.

## Plan A: Buy Everything

My initial plan for the new fund was simple. I was going to fill in each box of the architecture with purchased system, get them integrated, then sit back, relax and be the *laziest* CTO ever.

Unfortunately, back in 2004, this plan was impossible to achieve. I still think it is impossible in 2013 without significant vendor lock-in and many many workarounds, unless your fund is a simple long/short equity fund.

The problems were mainly in asset coverage. There was not any single trade capture or order management system that could handle the breadth of asset classes we wanted to trade. Pricing and risk systems were limited as well. A messaging platform to integrate our business with others simply did not exist. Fund accounting systems did accounting only and nothing else. The 2004 market was full of siloed, limited scope systems for siloed limited scope businesses.

{% pullquote %}
And worse, all these systems competed, they did not integrate nor were designed to do so. The trade capture systems, pricing systems, risk systems and accounting systems all had their own conventions, codes, formats and master data files. Add analytics platforms, surveillance platforms, modeling tools and the amount of duplicated data and functionality became staggering. Which of course meant that an insane amount work would have been needed to ensure their data to be consistent and in sync. {" I worried that the glue code might land up being more than the a fresh system's code. "} And then there were the workarounds, the hacks and the fakes needed to be implemented to cover our trade gamut.
{% endpullquote %}

{% img /images/mishmash-of-systems.png 700 455 %}

If we had gone with Plan A, we would have landed up with a mishmash of systems, all with their own strengths and weaknesses, their own functionality, access and data, and a massive amount of manual work or glue code to string them together. Most existing Hedge Fund's platforms look like this due to natural organic growth of the business, the difficulty of extending existing systems and the cost, challenges and exceptional business risk of systems replacement.

For a brand-new shiny fund, it made no sense to buy and integrate a resource intensive "string and baling wire" rigid platform based on our ideal architecture. Plan A was not an option.

## Plan B: Buy the Best, Build the Rest

So I chose to implement Plan B, to *buy the best and build the rest*. 

I was confident in my ability to execute on Plan B for one simple reason, I had done it all before, twice, at my previous firm. I had gone and made all the rookie and intermediate mistakes, gone through the learning curve, knew what needed to be done and what could be put off until later. The development risk that so plagues these projects was much lower in this case.

{% pullquote %}
The other benefit of Plan B for a *new* Hedge Fund was access to the principals, chief financial officer, portfolio managers and operations folks *before they got tied up doing their real jobs*. For the six months or so leading up to launch, {" I had unlimited access to their knowledge, expertise and networks. "} There were many security and trading nuances that needed to be understood, worked out, implemented and tested, so having a bunch of traders on hand to answer questions and test out modules was brilliant. The same applied to the operations required to settle, confirm and manage the asset classes I was not familiar with. Pricing and risk management models and builds were made easier by having the folks who knew and understood each asset on hand. I think most financial system builds fail because they are not built with this expertise in house and on hand, they are built by third parties based on the information they get second hand from their customers.
{% endpullquote %}

So how did plan B work? What to buy and what to build?

My goal was to have as few systems in place to service, integrate and maintain, with minimal data and functional duplication and one version of the truth (one and only one place to enter and manage any single data element). Which meant that we would buy systems that could do one thing well for *all* our asset classes, and build that which was not available so we could achieve a consistent, integrated, ideal platform.

Which meant that the buy decisions were easy to make (even if the product selections were not). We purchased:

- **RiskMetrics** for portfolio risk management for two reasons. One was that it could handle most of our asset classes (and we could model the rest on it) and two, because it made us and our investors comfortable that risk was properly covered.
- **VPM** for fund accounting (back then Geneva was too expensive and hard to get going, but I'd probably buy it now). Even though our Administrator was our official books and records, we needed a way to match and check their work. Note that the architecture I prefer does not drive the business from the fund accounting package (that had failed me before). I believe that other systems should do that. Instead, fund accounting is a result, an output, a check and balance and a NAV verifier for the business.
- Trade analytics systems for different asset class groups were also purchased (**Imagine**, **Intex** and **PolyPaths**). This was a no-brainer, these systems were cheap, industry standard and best practice for trading their supported securities. We later started writing our own analytics, but to get the business off the ground with good, trustworthy numbers, we needed these.

And *built* the rest.

{% img /images/the-greeks.png 700 460 %}

I cloistered myself at home and built the first versions of each of the following integrated products that went live at launch:

- A **master data** system containing all the core reference data for the entire platform, including a self-maintaining security master, rules engines, fund and strategy tree manager, user access controls and compliance control system.
- A **trade capture** system that was the *single* source for all our trades across all asset classes. The goal was to design and build a trade capture system that would work natively across mortgages, rates, derivatives and equity markets without hacks or workarounds.
- A **messaging** system to deliver trade, pricing, and factors within our platform and to guarantee delivery of data to our administrators, prime brokers, counterparties and external analytics systems.
- A **pricing and risk management** platform that could collect market prices from wherever they existed, or model them using our third-party analytics and consolidate prices and risk data for intraday and end-of-day reporting.
- A **back office** platform to manage trade confirmations, cash, holdings, positions, MTM, P&L, interest, commissions, financing and repos, pay-downs and shortfalls, corporate actions, initial margin and eventually collateral and margin calculation and reporting.

And that was just the beginning of the platform. It was enough test the fund's ideas and workflows in a paper fund before launching, and to launch the fund and operate comfortably on day one.

## Launch and Growth

We launched the fund later than expected. Had we launched on the original start date, we would have had about 12 asset classes working across the whole platform. However, on the day we did launch a few months later, the platform supported over 20 asset classes, integrated with three prime brokers and a single administrator.

This was achievable because I had a whole uninterrupted 6 months, a laptop, tools and access to get the platform off the ground. I spent the first few months building the core, designing the databases, creating the client and server common technology and code and writing the code that would someday enable us to create the workflows and assets. The next few months were spent using these tools and libraries to create the trade capture screens, messaging interfaces, models and pricers, risk interfaces and back office functions for the first few asset classes. And we launched the fund with that.

Over the months and years that followed, and as the fund grew and changed, we added features for more asset classes, finishing up around 65 of them (think everything except commodities, see the above diagram). We added multi-fund and auto-allocators, we added more administrators, pricing services, reporting capabilities, even our own analytics models. We created new platforms for mortgage analysis and surveillance, for reconciliations and investor management, integrated trade feeds, replaced analytics systems, moved prime brokers, added more compliance and regulatory reporting.

The benefits of having our own singular integrated platform revealed themselves time and again, including:

- **Maintaining a small headcount**, just two operations folks and an accountant to run the operations of a 900mm+ hedge fund. And the tech team grew to a *whopping* three people (including myself). Which meant the firm could acquire and place resources for maximum benefit, in trading and analysis.
- **Minimal issues and almost no failures**, because *we* created, knew and understood the platform, *we* controlled the data and the functions and *we* had the time to get things right. We never faced the situation where two systems reported different information about the fund, as all was consistent. *We owned and controlled our own destiny.*
- **Flexibility for the business to grow and change**. We could add new counterparties, brokers, funds and asset classes with ease because the platform was designed from the ground up to grow this way. We never faced a situation where the business changed and the systems could not go with it. Most other organizations land up having to build or buy new systems and go through hellish integration projects for new business functions, we just extended the platform. A new asset class, OK, a new interface to a new broker, easy.

It was not all unicorns and rainbows. There were times when we were not sure how to implement things, feature addition projects that started and had to be redone, data sources that we thought were good that turned out bad, and integrations that took more time that we planned. There were modules we wrote that worked great for a while, but business or market changes meant we had to throw them out and redo them.

But we never faced the situation where the business could not go somewhere or do something because of the systems. And we never faced a single day of downtime (except for an hour when our CEO pulled the plug on our systems to test Disaster Recovery, but that is another story).

## The Opportunity

Back when the opportunity was offered, I just knew that it was possible to build an end-to-end platform for this new business. I knew that all the elements to ensure the work's success were in place. I had access to the knowledge I needed for the assets and business functions that were new to me, and I had done it already before for the assets I already knew. I knew we had the time to get it right. I knew that technology was available to make the creation of these products easy was available and I was experienced in them. I knew many of the people at our third-parties so I knew the interfaces would be easy to implement.

Yes, there was also a lot I did not know. I had no idea about mortgages and how messy and complex they, their pricing and analytics and derivatives can get. I had little experience with equities and corporates and how credit ratings and mergers messed them around. I had no idea how difficult it would be to normalize risk data from a multitude of systems. And don't get me started on bank debt. But I also knew I had access to people who did know these things.

{% pullquote %}
{" Conventional wisdom at the time (and probably now as well) was that such an opportunity was foolish to offer and take, that creating an end-to-end custom platform for a Hedge Fund was too big, too difficult and too risky. "} The scope is too big, the risk of failure is too high, and the cost would be tremendous. Conventional wisdom preached that it was better to seek a lower standard, to "trust" your administrator and their systems and reports, let your brokers do the work for you, buy a bunch of siloed systems that others use to fill in the gaps (and integrate only what you can) and outsource the rest. And then deal with the issues, glue code, manual processes, inconsistencies, lack of understanding of your fund and lack of control.
{% endpullquote %}

{% pullquote %}
For an existing fund that is already full of third-party systems held together with "strings and baling wire" glue code, kicking off an end-to-end platform design and build does seem mad. And my observation of the market shows that those few that do try, most fail quietly and spectacularly. **{" But it can be done. "}** It requires drive, focus, commitment, access and talent.
{% endpullquote %}

{% pullquote %}
This opportunity was different. A new fund. Time to build guaranteed. Unlimited access to people and knowledge. A clean slate, no legacy to worry about. And I had done it before. This was the opportunity of a lifetime, it was offered to me and I took it. Together we built `The Greeks`, a complete, institutional-grade end-to-end Hedge Fund platform for our complex Hedge Fund. {" We did it. "} And ran our business on it for years.
{% endpullquote %}

<span class="light">*For more in the series, see [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/) or [Hire Us]({{ root_url }}/hire-us) to help you with your Hedge Fund systems needs.*</span>

*Follow the author as [@hiltmon](http://twitter.com/hiltmon) on Twitter and [@hiltmon](http://alpha.app.net/hiltmon) on App.Net. Mute `#xpost` on one.*
