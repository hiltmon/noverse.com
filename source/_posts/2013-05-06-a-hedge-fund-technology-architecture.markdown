---
layout: post
title: "A Hedge Fund Technology Architecture"
date: 2013-05-06 09:56
comments: true
categories: [ Hedge Fund Systems ]
---

<span class="light">This post is another part in a series on [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/), a series of posts based on my experience in the design, implementation, issues and thoughts involved in crafting an end-to-end platform for a complex Hedge Fund.</span>

This is a modified version of my original 2004 architecture plan for a Hedge Fund. See [The Opportunity]({{ root_url }}/blog/2013/05/the-opportunity/) for how it came about.

In this post I cover the objectives of the architecture, walk through the  architecture itself and provide an overview of `The Greeks`, our implementation thereof.

<!--more-->

## Objectives of the Architecture

Before discussing the content and flow, we need to look at *several* of the goals I want the architecture and any software implemented to it to achieve:

{% img /images/platform-goals.png 700 455 %}

- **Messaging is key.** A huge part of any finance business's operations is the ability to seamlessly deliver and receive data. Trades, positions, prices, security master updates, and other data sets need to be sent between the firm and its administrator's, counterparties, prime-brokers and third-party systems. Since this messaging is core, it is at the core of the architecture. It envisages a messaging module that is a toolkit and a set of configurations to send and receive any data from anywhere, any time, in any format.
- **Standardization is key.** All data in the system is contained in a few standard objects and locations. No matter what was traded, it is a trade object. No matter what the security, it is a security object. Which means that no matter the external format or coding, all data inside the architecture is to be standardized. Interfaces in the architecture only have to be written to interact with *one* standard, which leads to a lot less code to maintain.
- **Flexibility is key.** The architecture should support the addition of new funds, currencies, asset classes and third-parties with ease. Which means that it should be dynamically configurable and workflow based, not rigid, siloed or data based.
- **Workflow is key.** The architecture should implement and automate the best workflows for this kind of business, and enable users to track and monitor these flows. A workflow model also enables the system to grow and change as the business does.
- **Operations by Exception.** The system should automatically handle all routine workflows without user intervention. It should also alert users when things go wrong or happen outside the normal flows, and provide the tools to enable staff to focus on these exceptions only. We do not want people performing menial manual tasks that the architecture can and should be performing, we do want them to have the tools to focus on, track and manage the exceptions.
- **Integration is key.** The architecture should be fully integrated from the start; glue code and workarounds are not permitted. *Workarounds are like termites, once they get in, they can never be fully eradicated.*
- **One version of the truth.** There should be one and only one place to create, modify and remove a data element. Any systems that require copies of that data element should have it pushed from the one and only source, and there should be no way to change the duplicated data. This complicates the user access model, but ensures that all changes go through the proper workflows.
- **Not driven by accounting.** Accounting is necessary for the calculation of NAV and the recording of the official books and records of the business. But accounting is only a view on to a subset of data in a finance firm. There is also collateral, exposure, risk, historical analyses, what-if analyses, reconciliations and models, none of which can be done by accounting systems. *The business is not accounting, it should not be driven by it.* Or *dogs wag their tails, their tails do not wag them.*
- **Code, not data.** The architecture should depend on optimized Object Oriented code and not on database queries, reports and scripts. The database should be used as a data store only, and shared, common code should be used to access the data to perform calculations, present views of the data or for interfaces. Why? **Because databases are rigid, code is flexible**. And because databases require expensive, rigid joins, yet objects can be composited to create more complex forms.
- **All the Information at your fingertips.** The architecture should provide views of the data to suit the needs of all users at the click of a button and a glance at a screen. And if information needs to be shared with outsiders, be they investors, counterparties, credit officers, auditors or even regulators, the architecture should both have the data available in it and make it easy to generate and deliver it in the format they request.
- **Productivity is key.** All these goals really boil down to creating an architecture that maximizes developer and user productivity. All the flows, data, flexibility and integration in the world is no good unless the platform in intuitive, easy to use, provides what each user needs, when they need it, how they need it, and is designed for productivity.

## The Architecture

{% img /images/hedge-fund-platform.png 700 459 %}

Let us follow the trade workflow through the architecture:

- A trader models a trade or even places an order using their **Analytics**.
- If the trade is executed electronically, it will be fed in from **Trading Systems**. These include third-party trading platforms like REDI, FIX STP connections, or even files from counterparties. If not, the trader needs to book it in **Trading** manually.
- All trades for all asset classes are tracked, recorded and allocated in the **Trading** system and nowhere else. Trade documents are attached.
- The security information for the trade is accessed from **Master Data**. If the security is not found, **Master Data** will go out and source that security's data from **Data Sources**. Once the security is in the **Master Data** database, it will be maintained by **Master Data**, capturing changes, actions and rates for this security. Derivatives and OTC contract securities are also managed by **Master Data**.
- **Master Data** also contains additional *configuration* information such as:
	- Fund and feeder information.
	- Counterparty account information.
	- Books and Strategies.
	- User access and permissions.
	- Fee and commission rules.
	- Compliance rules, trader limits.
	- All other common configuration data.
- Once the trade is checked out in **Trading**, it is delivered to **Messaging**.
- **Messaging** determines who needs to know about the trade, when they need it, in what format, and then delivers the trade (and confirms delivery) to:
	- The Trade's **Prime Broker**.
	- The Trade's fund **Administrator**.
	- Notifies the **Counterparty** *if necessary*.
	- Pushes it back into the Trader's **Analytics** to reflect the execution.
	- Triggers a model run in **Pricing and Risk** *if necessary*.
	- Notifies the internal **Operations** system so that live P&L and exposure can be updated.
	- And pushes it into the **Fund Accounting** system along with any reference data needed.
- When necessary, the **Pricing and Risk** system pulls (or gets pushed) prices from **Pricing Services** in the market, and feeds the necessary prices to **Messaging** which delivers them to where they are needed.
- If a security needs a model run, **Pricing and Risk** configures a model and runs it using the same Trader **Analytics** to price that security.
- **Pricing and Risk** also collects risk information from its own models and **Analytics** to create intraday risk reports.
- **Pricing and Risk** packages up the entire fund and drives the **Risk Systems** to generate portfolio stress tests, risk reports and VAR.
- **Pricing and Risk** uses pricing rules to determine the end of day and end of month prices to use to mark the book and delivers them using **Messaging**.
- The operations crew of the firm use the **Operations** system to perform all operations functions, including:
	- Confirm and settle trades.
	- Manage cash and execute wire transfers.
	- Manage holdings and security movements.
	- Track interest, fee and commission payments and income.
	- View and monitor P&L.
	- Execute any corporate actions (If it affects trades, these happen in the **Trading** system).
	- Track and manage all financing and rebates.
	- Book any mortgage shortfalls and pay-downs.
	- Compare margin calls to collateral management reports.
	- Book expenses.
	- Create and deliver any regulatory reports.
- Changes and instructions in **Operations** are delivered using **Messaging** to **Prime Brokers** and **Fund Accounting**.
- The next day, the **Reconciliations** system retrieves copies of data files (not reports) from **Prime Brokers**, **Administrators**, the **Fund Accounting** system and the **Operations** system and performs an automated multi-way reconciliation. Any issues found are presented as action on operations staff for resolution.
- Subscriptions, redemptions, investor allocations and statements may be performed by Administrators, but these are also checked and balanced in **Investor Management**. This also doubles as a marketing system for potential investor tracking and for delivery of transparency reports.

This architecture single sources all data across the platform, centralizes activities where it can and consists of tools to enable the interfaces and flows desired. No matter the asset class, users go to the same place in the platform to perform tasks.

It also eliminates a lot of duplication of data between systems as all components use the same single, live source. Which means the firm does not have to expend resources to synchronize and reconcile between internal components and can trust the numbers presented.

It also enables maximum automation of the business. Since the same data and same internal objects are used everywhere, creating interfaces to analytics and third party systems is both centralized and easy to implement. Especially once the toolkits and libraries are built for one version of a format, the next is easy.

The architecture also enables the developer team to spend time and resources on creating better views and in adding features to meet upcoming business changes instead of more writing more glue code, manually repairing issues or dealing with integration failures.

{% img right /images/mishmash-of-systems.png 350 227 %}

And when a format or interface does change, the libraries are in place to enable the development team to implement the change very quickly and get it into production. When you have a mishmash of systems (no architecture), each change by the developers has to be tested across the network of systems and glue to ensure it does not break the business flow elsewhere. And that takes too much time.

## An Implementation

This architecture was implemented as the core for a 900mm+ Hedge Fund that traded *everything* except commodities. This diagram is a version of the one that we included in our fund's Pitch Book.

{% img /images/the-greeks.png 700 460 %}

The `Greeks` consisted of:

- **Lambda** was our **Master Data** system, a self maintaining security master and platform configurator. All funds, user access, rules and accounts were set up here.
- **Epsilon** was the **Master Code** base, a set of code libraries and classes used in all components for everything including trades, positions, securities, calculations, user interface, file generation and formats, conventions, analytics and other common code. We only had one way to perform any calculation and reused it everywhere.
- **Omega** was the **Trading** component, supporting 65 different asset classes from equities, through corporate bonds, government bonds, futures, options, swaps, credit default swaps, mortgages, mortgage derivatives, FX and bank debt. It also acted as the destination for all STP connections and provided our trader reports and access to trade documentation.
- **Mu** was the messaging module, with integrations for six Prime Brokers, two Administrators and quite a few Counterparties. It also delivered data to **Zeta**, VPM for Fund Accounting, and all our third-party analytics including Imagine and PolyPaths.
- **Rho** was our **Pricing and Risk** platform, pricing every position in our books every single day, no matter how illiquid. It also collected risk data from a myriad of internally developed and third-party analytics, normalized the data and presented intra-day risk reports. It then pushed the entire portfolio over to RiskMetrics for portfolio risk and pulled the data back for reporting.
- **Zeta** was our **Operations** component, handling all the middle office, back office and operations functions from trade confirmations, settlements and cash management, P&L and financing to a full blown collateral management system.
- **Tau** was our **Reconciliation** component, reconciling all the systems and counterparties, and tracking the breaks.
- **Phi** was our **Investor Management** component.
- **Kappa** and **Pi** were additional systems added to the platform to perform mortgage surveillance and modeling.

The `Greeks` were developed in native C# against a SQL Server database. Some coding was performed in Perl, C++ and MATLAB. The original version had GUI clients with a web services back end and MSMQ to manage messaging, the second version had GUI clients with a faster, a direct networking model, and our own messaging model.

## Did the Architecture Work?

Yes, it sure did.

It enabled us to grow from 40mm to over 900mm AUM without adding much headcount. We grew from a single fund to one with managed accounts and auto-allocations. We went from 20 to about 65 asset classes. We started with two prime-brokers and ended up with three different ones. We started with one administrator and added another.

Whereas the architecture remained the same, the feature set grew and evolved as well. For example, we did not build the original components with automatic pass through fund allocations in mind, and did not know about the need for collateral management and margin prediction. But the architecture remained as the object model evolved.

We always knew where every position, holding and dollar was. We always knew the value and risk of our portfolio. We had it set up for disaster recovery and tested failover regularly. If something changed, the system changed with it. And when anyone needed information, we had it at our fingertips, and it was never confusing or inconsistent.

We did not suffer business interruption, or limits to the growth and scope of the business. And we, and more importantly, our investors, understood and trusted our technology, freeing us to focus on trading and opportunities.

Maybe it only worked because we could and did design our business this way. See [The Opportunity]({{ root_url }}/blog/2013/05/the-opportunity/) to learn how this ideal situation arose to create this ideal system for our fund.

Or maybe the elimination of duplication, the centralization of code, data and function, the understanding only a developer of a system can have for their own creation, made this architecture sing.

Or maybe it was easy for investors, credit officers, portfolio managers, auditors, and regulators to see the transparency of the system, the quality of its data, and to understand its architecture.

<span class="light">*For more in the series, see [Hedge Fund Systems]({{ root_url }}/blog/categories/hedge-fund-systems/) or [Hire Us]({{ root_url }}/hire-us) to help you with your Hedge Fund systems needs.*</span>

*Follow the author as [@hiltmon](http://twitter.com/hiltmon) on Twitter and [@hiltmon](http://alpha.app.net/hiltmon) on App.Net. Mute `#xpost` on one.*


