---
layout: post
title: "Testing the new Web Design"
date: 2010-07-16 10:50
comments: true
author: Hiltmon
categories:
- Tools and Techniques
---

I decided to revamp the noverse.com website before it became too complex.  The original site had too many pages, and tons of html was being repeated.  Every change had to be made in too many places, and as a developer, that violates the rules.

So, I switched from HTML/CSS to PHP-HTML/CSS.  Easy.  The only PHP I am using is to include common blocks of code, like the navigation bar, sidebar and footer.

I also redid the CSS, used class attributes for formatting and id attributes for DOM naming, CSS to make the title bars, CSS to handle the background images and preloading, and CSS for the layout.

I initially tested the site CSS using CSSEdit from MacRabbit.  I created the home page as a pure html file, before breaking it up into PHP parts, and used the live preview feature to see how each CSS change applied. **This has seriously got to be the most productive way to build and test CSS**.

I then tested the site on 3 browsers, Safari, Chrome and Firefox, simply because these were installed on my Macintosh OS X development computer.  Since the CSS had already passed CSSEdit's preview tests, the browser tests were simply a formality.

But, before I sent the site out, I needed to test it against Internet Explorer, the most common browser out there.  So up came the VM with Windows XP, up came MAMP locally to host the site, and off I went.  IE8 showed the site reasonably well.  Some of the CSS awesomeness, such as rounded corners failed as expected, but it worked.

But the most common browser out there is IE6, and its CSS support is horrible.  Since I did not have IE6, I used some web sites to render for me.  The site turned out to be a mess.  PNG transparency, gone.  Hover images, gone.  Image preloading, nada. But surprisingly, the structure seems to hold.  IE7 is better, running like a dog under Wine, but still not very good.

But I don't care.  My target market uses iPhones, and iPhone users tend to be using Windows 7, or ubuntu or Macs, and their browsers stack up fine.

Waiting for the first complaint about the web site under IE6.  My guess it that I'll be waiting a while.

