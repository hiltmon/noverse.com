---
layout: post
title: "Use Source Code Control, even when working on your own"
date: 2010-02-01 17:37
comments: true
author: Hiltmon
categories:
- Indie Developer
- Tools and Techniques
---

I use a source code control system (SCCS) from day one on all my projects, even when I am working alone.  Here are some of the reasons why.

### Backup

I run a SCCS server on a separate computer, not my development box, so that all my brilliant code is stored safely on a second computer.  If anything happens to my primary development box, no dramas, I can get the code back from the server.  And of course, the server repository folder is backed up to an external drive and offsite all the time.  Even though I am working on my own, I need safe code backups.

### Not right the first time

There is no way I am going to get the code right the first time, or even the tenth time.  I am going to refactor, rewrite, re-architect, rename, debug, and change the code around until I am satisfied it gets the job done right.  I use source code control to make sure that when I do all that, I have a safe copy of all my attempts in case I need to go back to any of them, or in case I need to run a older working version against a refactored version.

### Screwups

Lets be fair, we've all deleted stuff past the undo limits of an IDE, or gone to the file system and nuked folders that were critical.  I do so all the time.  Good backups are not necessarily granular enough, source code control to the rescue.

### Clean Code

I hate leaving blocks of code commented out, just in case I need them again later.  Its ugly and it makes code files larger and harder to read.  Instead, I save the code to source code control, then nuke it.  If I need it back, well, there's always the old version.  This kind of discipline is critical when applications get complex, or lots of time passes and you forget what's in a file.

### Unused code

One of the most common mistakes programmers make is to leave functions in code that are no longer needed or referenced.  Sure, modern compilers are smart enough to simply ignore unreachable code in simple cases, but humans, who read the code, never know what is used and what is not.  How many time have you been debugging someone else's code and examined a function only to find its never called.  When I identify unused code (at the time of making it unused - good discipline again), I save the unused code to SCCS, then nuke it.

### What was I thinking

Oftentimes, I get stuck on an algorithm or on how to implement something.  I use source code control so save my thoughts and half-baked ideas and move on to something else.  Sometimes, by just leaving a problem alone and working on something else, the solution presents itself.  And if no solution arises, I can always go back to what I was thinking when I got stuck.

### Releases

Everytime I release the code to anyone, I create a SCCS tagged version, allowing me to go back to that version knowing that it compiled, that it ran, and that it was released.  It also allows me to then continue working on the product while supporting earlier releases.

### What did I do

I used to be one of those who kept a log of what was done to a code file on the header comment.  You've seen them, author, date, did this and that, next author, next date, next did this and that.  Two things were wrong with this, one, even a disciplined person like me failed to maintain it, and two, it made the header so large that programmers always had to scroll down a lot to get to the code.  No more, now I force myself to write good comments when checking code in and the SCCS tells me what I did when.

### Sharing

I may be the one and only programmer now, but that will not always be the case.  Source code control systems allow me to share my work when I add programmers.

### Which SCCS?

Folks, that's up to you.  Whatever works for you and your team.  I use subversion, because it integrates nicely into my IDE's and is already default configured on OS X Server.  But any SCCS will do.

### So, No Commitment Issues

If you write code, you should have a SCCS.  Commit regularly, commit often.  Write good commit comments.  Tag releases.  It only takes a little time and discipline.  And the first time its saves you, you'll realize the rewards are brilliant.
