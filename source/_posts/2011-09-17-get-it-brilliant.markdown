---
layout: post
title: "Get it Brilliant"
date: 2011-09-17 13:33
comments: true
author: Hiltmon
categories:
- Indie Developer
- Software Designer
- Tools and Techniques
---

When it comes to software, there should be no such thing as 'good enough' software.  Yet most software fits this bill, it does something 'good enough' to get the work done or even sell.  Even though the user has to jump through hoops to do so, or create workarounds to make the whole thing work.

At Noverse, we don't make 'good enough' software.  Our products must be brilliant, they must be flexible, they must be proven correct, they must get the job done without workarounds, they must be fast and easy to use, they must be amazing.

So how do we do this?  We have a process, a set of software quality levels that must all be achieved, and we follow this process every time

{% blockquote %}
Get it Designed   

Get it Architected   

Get it Working   

Get it Right   

Get it Fast   

Get it Intuitive   

Get it Out  
{% endblockquote %}

Lets walk through each level

### Get it Designed

When it comes to software, most scribble a list of requirements and start programming, spitting out classes and racing ahead.

**Programming is not good enough!**

Before we even start on any software project, we design.  In order to design, we need to understand the needs and the flows that the software must implement.  We need to understand what needs to be done, why it must happen, how it is being done and when it gets done.

And then we design.  We design a better _what_, we examine all the _why's_ to see if they should be done, we find better ways to do the _how's_ and we look to see if we can make the _when's_ happen faster.

And then we design some more.  We design a better workflow, we design out steps that are unnecessary and design in automations, we design in flexibility and scaleability.

### Get it Architected

**Designed is not good enough!**

A good design will only hold together if it is properly architected.  We choose and plan the structure of the programs and components to ensure that they will all work together, that they can be maintained and scaled, and that we can build and test them independently.  We architect in the ability to flex the design, to maintain the software later and to even switch out components.

There are always things that are unknown at the start of a project.  Will this algorithm work? Can these components interact? Can this library handle the volume?  Before we start banging out classes, we identify the unknowns and create spike solutions to test them.  If the spikes work, we know the architecture will hold.  If they do not, we get the chance to find better solutions before we are too far down the development path.

### Get it Working

**Architected is not good enough!**

All code we write must compile.  It seems obvious to say this, but its not uncommon for others to work on code-bases that do not compile for days on end, hoping to get to a compilable state.  Our code must always compile.  But that does not mean it works.

All code we write must pass tests.  Not only must it pass tests for success, but also pass tests for failure and where necessary, tests for stress.  If code passes all the tests we can think of, we know it works.  If we change the code and the tests still pass, we know it works.

And we release early and often.  Daily if we can.  Which means we expose our customers to changes in the software as it happens.  And its pretty embarrassing to release non-functional software when the customer is watching.

### Get it Right

**Working is not good enough!**

Our software must also be right.  All calculations, all validations, all algorithms, all integrations, all formats, all reports, all deliverables must be right.

How do we know if it is right?  We check. And re-check.  We compare the results of our calculations with other systems, we compare our results with the manual processes we are replacing, we compare our outputs with external parties, we compare our results with the design and we embed these comparisons in even more tests.

We are rigorous about this, but this rigor pays off in being able to trust our software.  If we see a number on the screen, we know that number is good.

### Get it Fast

**But right is not good enough!**

Our software must also be fast.  It's no good if our software gets a calculation right if it takes too long to calculate it.  It's no good if our software executes a workflow impeccably but takes so long that it was easier to do the same flow manually.

Our users want an instant response wherever possible, that is why they are investing in software.  Our users want to get more done in the same time with the same or fewer resources.  And our users will not use nor enjoy the experience of using slow software.

### Get it Intuitive

**But fast is still not good enough!**

Software that creates the right outputs quickly but is hard to use is just as likely not to get used and to create user frustration.

Our software has to be easy to use, and to be easy to be used by our target market.  What's easy to use as programmers is not the same as easy to use by retired people.

So we make our software simple.  Making simple is hard, but it makes it easier to write and easier to use, and importantly, also easier to learn.  We make it intuitive, using the language and norms and flows that are familiar to our users. And we make it focussed, taking away distractions, extraneous choices and processes that have to be remembered by our users.

And we try so very hard to make the software state clear, so that after every interruption by the real world, our users can quickly remember 'where was I and what was I doing' by glancing at the screen.

### Get it Out

**But intuitive is _still_ not good enough!**

We get it out.  Releasing early, releasing often.  As soon as the customer, the user and anyone else for that matter starts playing with the software, we get feedback.  We quickly learn where our design assumptions were maybe off base, or where our flows can be improved, or where there are ways to make the software better by watching how they interact with it.

By getting it out, we catch errors and misunderstandings early enough.  By getting it out, our customers and users become part of the development process.  By getting it out, and by listening to and watching our users, we get to become better programmers and make better software.

And we ship.  We finish the product.  We get the final product out into the client or into the market.  Until we ship, our software is not good enough.  Until the customer and our users say so, our software is not good enough.

### The Process

So next time you need software, follow the process to get brilliant software, until then its just not 'good enough'.

{% blockquote %}
Get it Designed   

Get it Architected   

Get it Working   

Get it Right   

Get it Fast   

Get it Intuitive   

Get it Out 
{% endblockquote %} 
