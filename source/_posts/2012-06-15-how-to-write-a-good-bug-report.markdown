---
layout: post
title: "How to write a good bug report"
date: 2012-06-15 11:57
comments: true
categories: 
---

Software has bugs, yes, even ours. Since programmers are human, and humans make mistakes, ergo bugs. When you come across a bug in our software, or anyone else's for that matter, you need to email in a bug report. The developer can use this to identify the problem, replicate the problem and fix it.

But most of the time, we developers find submitted bug reports to be incomprehensible. This is because the submitter has no idea what we need, how to communicate with us and how to write one of these bug report things.

In this article, I am going to teach you about how to write a good bug report so that the developer can understand, replicate and fix the issue.

[Download](http://www.noverse.com/images/noverse-bug-reporting-template.txt) a text template for a bug report.

## Why send a bug report

Bug reports help us developers in a myriad of ways:

* They tell us about issues we are not aware of
* They help identify new features that we may not have thought of
* They help us get a feel as to how our customers use our software, so we can make it better

Without bug reports, we have no idea things are going wrong, or acting slowly or not working for you. We need these just as much as you need the software to sing and dance.

## When to send a bug report

Short answer, **always** and as quickly as possible. Longer answer, when:

* You see an error message, *send a bug report*
* The screen is blank or data is missing, *send a bug report*
* When the program does not behave as expected, *send a bug report*
* When the program crashes, freezes, becomes non-responsive or is slow, *send a bug report*
* When the program gives an incorrect answer, send a bug report
* When you don't get what you need from the software, *send a bug report*
* If you cannot figure out how to do something, send a bug report
* If you don't like the way it does things, or the software annoys you, *send a bug report*
* If you have to implement a workaround in the system, *send a bug report*

## What should it include

A bug report should contain a lot of information, the more you supply, the better. Some developers, like me, offer a [plain text file template](http://www.noverse.com/images/noverse-bug-reporting-template.txt) for you to fill in and email. Others have a web form. But most expect you to make one up and email it. Here is what it should contain and how to write each section:

**Title**: Create a short title for the report, and please be clear what the issue is. "*Application crashed*" is a horrible title as it gives no information on what is included in the report. Instead, title it with the error message and code, or product name and thing you were doing when it failed. For example: "*Error 402: Access denied when clicking 'Send Email'*" or "*Kifu reports error when generating Honors Report*". Both of these provide context for the bug report.

* Bad: "*It crashed*", "*Saw an error*", "*Bug*"
* Good: "*Error 5C79 when printing from Kifu*", "*Kifu honors report is blank*"

**Product**: Identify the product, by name and say which version you are on. Almost all software has an about box with version information or it's in the footer on web applications.

* Bad: "*Your application*"
* Good: "*Kifu v1.01*"

**Classification**: We need to know how serious it is, is this a feature request, minor annoyance or a full blown show-stopping nuclear-reactor-melting-down armageddon bug. Most forms have a set of these to choose from, but if they don't, try one of: "*New feature*", "*Minor Annoyance*", "*Crashing Bug*", "*Serious Bug*" or "*Minor Bug*" for those you can work around.

* Bad: Leave it blank
* Good: "*Serious Bug*", "*Annoyance*", "*Feature Request*"

**Platform**: Tell us what you are using to run the software, especially operating system name and version and web browser name and version, they are all different, and it's important for us to know it - especially for web applications.

* Bad: "*Windows*"
* Good: "*Windows 7, Internet Explorer 9*"

**Can it be reproduced?**: Some of the most annoying bugs are intermittent and cannot be reproduced. We'd like to know up-front if we are dealing with an oddity or an every-time bug.

* Bad: Leave it blank
* Good: "*Every time*", "*Occasionally*", "*Unable to Reproduce*"

**Description**: This is the area where most people struggle, how to describe what the issue is. Try to include all of the following in the description:

* **Summary**: A quick natural language overview of what you were trying to do when the bug appeared. Start with context, where in the application you are, then focus on the "what" you did and "what" the software did. Try to describe it like an old school news reporter would call in a story from a phone booth, just the facts.
	* Bad: "*Application does not work*"
	* Good: "*Clicked on 'Print' button on 'Honors Report' screen, but the report is blank*"
* **What happened**: Describe step-by-step what you were doing when the bug appeared, and why you think it's wrong. Be specific, type out the menu names, screen titles and the full wording on buttons or links clicked. If you do the same steps, does the same error occur?
	* Bad: "*Blank report*"
	* Good: "*I clicked on 'File / Save As...' and the 'Save' dialog came up. I then clicked on the 'OK' button but the file did not save.*"
* **What's the error**: If an error message does come up, copy and paste the whole thing in. It makes it really easy for us to track these down.
	* Bad: "*There was an error, but I clicked it away and did not read it*"
	* Good: "*Error 403: Access denied*"
* **Supporting Information**: If this issue happens on a specific login or on specific data or at a specific time, provide that too. Specify the record you were on if you can.
	* Bad: Leave it blank
	* Good: "*This error happens for all event records that are fees, but works for event records that are campaigns*".

**Steps to reproduce**: If you can make this bug happen again, great. That's a huge help. Describe step-by-step how to reproduce it, from as far back in the process as possible. And again, be specific. "*I clicked on X*" is different to "*I double-clicked on X*" is different to "*I tabbed to X and pressed return*". All three trigger X, but what did you do?

* Bad: "*I tried to print, but it did not work*"
* Good: "*From the 'Honors Report' screen, click on the 'Print' button*"

**Expected results**: Describe what you expected to happen when the bug occurred. This section is especially useful if the program does not behave as you expect it to, or if you would like to change the way the program works because it's annoying.

* Bad: "*I expected it to work*"
* Good: "*I expected to see a PDF of the Honors Report.*"

**Actual results**: What did happen when the bug occurred. What was wrong, why is it wrong or if an error was thrown, what was the error.

* Bad: "*It did not work*"
* Good: "*I received a blank PDF file*", or "*Error 403: Access denied*"

**Workaround**: If you have found a way to continue using the software by working around the bug, explain it. We may fix the bug, but the workaround could be causing other problems. Many people think this should be included in a bug report, I'm not sure as it does encourage workarounds instead of bug reporting.

* Bad: "*I have a workaround*"
* Good: "*If you restart the application, and go straight to the report, it works the first time.*"

**Attachments**: If you know how to make screenshots, do it. Attach a shot of the error, and of the screen just before the error and the one before that. We developers can then see what happened and what you see. If the application issues a crash log (or has any kind of log), attach that too.

**Contact Information**: Add your name and email. So we can keep you posted on the investigation and repair, and to enable us to ask you any questions about the bug that we may not understand. If you forget this, we may not be able to contact you and fix this bug.

## Hints and tips

* **Show stoppers**: If the bug is stopping you from working or has a deadline by when it needs to be fixed, let us know up-front. That's what the class field is for. We developers understand showstoppers, we know how it feels when the software does not work and you need to get things done. We will drop everything to fix these.
* **Be specific**: Use the exact same words as the application. If you see something, write it as is. If you click something, write it's exact name.
	* *For menus*: Follow the sequence of menus separated by the '/' character, for example "File / Save As..."
	* *For screens*: Look at the top of the window and type exactly what is there
	* *For buttons or tabs*: Copy and paste the exact text shown
	* *For links*: Copy and paste the whole URL (including the "http://")
* **Don't ignore error dialogs, ever!**: It is a hassle to report every time an error comes up, and it's just too easy to click it away instead of reading it. But if you ignore these, and don't report these, we'll never know. We don't know when you see an error, and even though we have logs, it's hard to find errors in them.
* **What was happening before**: The problem is that a bug is the end of a workflow. To reproduce it we need to reproduce the whole workflow. Which means we need you to tell us what you were doing before the bug appeared and what the software was doing too.
* **Report the first error you see**: Oftentimes, people get so used to an error that they become tuned to ignoring it. So when a new error occurs, they report that as the "first" error they saw. Not true. If a part of a system has failed, the next error may be a result of the first failure and not a real error in itself. We need to know if you ignored a crash before you got this error.
* **Attach or Copy and Paste**: Copy and paste whatever you can into the bug report, attach as many screens and files as you can. The more information we have, the more likely we'll find the issue and fix it.
* **Workarounds are Bugs**: If you cannot get something done using the expected process, but can with a workaround, you have a bug. Report it. Workarounds cause huge problems later on so its best to get the expected process fixed than rely on the workaround.
* **More is better**: I know I am repeating myself, but the more you put in the report, the less we need to do to find the issue.
* **Stay on topic**: A bug is something that happens in software, its a "what" or a "how". It does not help us to know what else you were doing, or why you were doing it (unless we ask), or what you are wearing. We need to know what you did that triggered the bug so we can fix it.
* **Don't get personal**: You are reporting a bug, not discussing the developer's nature or the quality of the software. Bug reports that contain offensive or emotional language will be ignored. I don't suck, nor does my software, so lets discuss the bug.

And my biggest tip of them all:

* **It's not you**: *You* did not create the bug. *You* did not break the system. It's not *your* fault. *You* are not stupid. There exists a bug, the system broke, now lets find it and fix it. It's not about you, its about the bug.

We do want to hear from you. Seriously we do. We want you to send bug reports in, we need to you bother us, and we know how hard it is for you to produce a bug report. A lot of people don't report bugs because they do not want to bother the developer. That is the wrong attitude. Send us your bug reports and ideas. Barrage us with them if you can.

Feel free to [download](http://www.noverse.com/images/noverse-bug-reporting-template.txt) my plain text template [here](http://www.noverse.com/images/noverse-bug-reporting-template.txt).
