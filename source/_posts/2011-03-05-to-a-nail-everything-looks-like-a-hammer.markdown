---
layout: post
title: "To a nail, everything looks like a hammer"
date: 2011-03-05 10:27
comments: true
author: Hiltmon
categories:
- Software Designer
- Tools and Techniques
---

> One of the most common scenarios I see is companies using Excel to run their core business. Whenever a new report is needed, new analysis, new form, data conversion, no matter the task, they turn to Excel. They make everything look like a nail, and the only tool they understand is Excel, so they use it like a hammer. The result?  Manual processes, inconsistent data, key-person dependencies, inflexibility, pain and suffering. They call Noverse LLC in, but fear using other platforms, because they only know Excel.  There is hope.

I write a lot of software for hedge funds and other corporate clients.  Whenever I design a new piece of software, I also recommend which tools I prefer to use for that project.  No matter what I recommend, the client always rejects it in favor of the tools they know.

If they cannot get it in Excel (and we do not offer Excel), then it's C#, SQL Server, always on Windows.

Their reasoning makes sense.  They usually have a small IT staff, they are calling Noverse LLC in because they do not have the time or skills to get something done, and they have to maintain it later.  They know C#, they know SQL Server and they know Windows.  And when they do need to grow their IT team, they can easily hire single-skill workers, who are easy to find, reasonable cheap and easy to hire.

### It's not a Nail

I, on the other hand, believe this is the incorrect approach. Each task is possibly quite different, requiring the right tools. I believe companies should embrace new platforms, tools and technologies. And here is why.

**Speed of Development: It can be written faster.** C and C++ are great for compute intensive tasks.  Javascript is great for in-browser scripting.  Ruby, Python and Perl are excellent for file manipulation and delivery.  You can use C# or Java for all of the above, but it takes longer to write than using others (except may be C), is usually less maintainable because the code size is so much greater and getting the architecture right is that much harder. Since programmers are almost always under deadline, using the right language for the right the component can get it done quicker. And on modern operating systems and processors, the execution performance difference is negligible.  In one of my previous funds, we replaced a huge amount of manual work and integrated the processing in a risk management system with a bunch of Perl scripts.  They had tried to do it on C++ and failed.

**Better Programmers: It can be written better.** A programmer who knows more than one programming language, who is skilled in several scripting technologies and main-line languages is, by definition, a better programmer. They have a larger set of programming patterns to design and develop from, a wider range of skills that can be employed and know a wider range of libraries to improve their deliverables. Knowing multiple platforms enables the programmer to understand the strengths and weaknesses of different platforms, choose the right platform for each job, and maintain a wider range of systems.  It makes them more productive and more valuable.

**Better Flexibility: It can be easier to change.** Business changes every day. Your company needs to be nimble and respond quickly, or opportunities may pass you by. In the hedge fund game, it is not unusual for IT to tell the business it will take weeks to add a new interface or process a new data set.  In reality, it's the tools they use that limit them. In a previous fund, I used Perl to write all file moves and transforms, which enabled a single programmer to part-time add, maintain and change all our file and data processes, with turnaround times in the hours, not weeks.  In a later fund, I did use C#, but to create a meta-data driven file fetch and transform process (instead of writing each file transfer and processor individually), which made us even more nimble and flexible.

**Platform Cost: It can be cheaper.** Windows costs money, SQL Server costs more, even the C# developer tools cost money. Linux? Free. MySQL? Free. Ruby on Rails? Free.  No matter what Gartner and CIO Magazine say, open source is cheaper to buy, cheaper to run and cheaper to maintain. Even more extreme, I ran Macintoshes at my last hedge fund and they were net cheaper than their Windows counterparts, even though the hardware was beefier and more expensive up front.  If you need to go compute intensive, or large memory, or run lots of threads, look away from Windows.  MySQL is blitzing fast for small to medium sized databases, and free. High performance web services look the same from the client whether written in Ruby on Rails or ASPX.

**Security Infrastructure: It can be more secure.** Based on empirical evidence, what is more secure, IIS on Windows or Apache on Linux? Answer: Apache has more documented vulnerabilities, but is way more secure. Yet most companies remain on the Windows monoculture.  I have noticed a trend in the super-large companies moving away from Windows, but they still remain stuck on Java.  If you are going to have a public facing server, and do not want load up on firewalls, intrusion detection systems and funky router configurations, why not use a Linux server out there.

**Scaleability and Load: It can handle it.**  A common argument against using the newer scripting technologies or platforms is that they do not scale, they can't handle the volume and stresses of a true corporate data workload. Rubbish! Apache runs the largest and busiest web sites on the planet. Ruby on Rails runs Twitter. PHP is Wordpress. In terms of platform maturity, C# and Ruby are about the same age, as is JavaScript to Java, and both Python and JavaScript are more ubiquitous.

**Support: It will stick around.** The final argument against using non-Microsoft or non-Oracle (Java) platforms is that companies are afraid that the platform they choose will not be supported, what if something goes wrong.  Well, Red Hat makes a supported Linux, Apple makes a supported Unix (OS X is an excellent Unix), and both support the open source components on their platforms. Oracle offers a supported MySQL. Open source software is supported by the community, there are thousands of people out there finding and fixing bugs, documenting workarounds and patches, and improving these platforms. And there are some serious players, like IBM and Facebook, depending on these technologies, they will not let them fall.

### Use the right Tool

In my experience, about half of corporate computing is moving and transforming data around, between systems, between companies, and the rest is actual computation, reporting and email.  If you wrote the moving and transforming half in a scripting language, you would get it up and running quicker, it's easier to maintain, and easy to change.  Do it in C# or Java, it will take longer, require more architecture and become inflexible.

So consider, on your next project, the opportunity to use a different tool or platform. Learn it, study its benefits and weaknesses, grow your skills, improve your flexibility. It will make your business more flexible, responsive and dynamic.
