---
layout: page
title: "beta"
date: 2012-02-12 16:30
comments: false
sharing: false
footer: false
---

## Sending Your Device ID to Us

Before we can send you an application for testing, we need to register your device with Apple under their application-testing program.

To send your device ID to us for test-program registration:

* Launch iTunes.
* Connect your device to your computer.
* Select the device in the Devices list.
* In the Summary pane, click the Serial Number label. It changes to Identifier.
* Choose Edit > Copy.
* Email your device identifier to me. Be sure to include your name and device name in the email.

## Installing an Application for Testing

After being successfully registered in our testing program, we will send you an archive containing two files: the application and a provisioning profile. You need to install both files into iTunes to run the application on your device.

After opening the archive:

* Drag the provisioning profile (the file with the .mobileprovision extension) to the iTunes Library group.
* Drag the application (the file with the .app extension) to the iTunes Library group. The application appears in the Applications list.
* Sync your device. If the version of iPhone OS on your device is earlier than the test application can run on, you need to update your device with the current release of iPhone OS.

## Sending Crash Reports to Noverse

If the application you're testing crashes, iPhone OS creates a record of that event. The next time you connect your device to iTunes, iTunes downloads those records (known as crash logs) to your computer. To help get the problem fixed, you should send crash logs of the application you're testing to us.

The most important part of a crash log is your impression on what was happening at the time of the crash. Please try to email us with a detailed description of all you saw and did that led up to the crash. If you can reproduce the crash again and again, and can tell us the steps to follow, that's even better.

If you can, send a screenshot. On the iPhone, press the home button (the round one) and the power button (the rectangular one at the top) at the same time. The iPhone will snap the screen and add it to your photos. Go to the photos app to email the picture, or sync it with iTunes when you collect crash reports.

### Sending Crash Reports from Macs

To send crash logs to me:

* In the Finder, open a new window.
* Choose **Go > Go to Folder**.
* Enter `~/Library/Logs/CrashReporter/MobileDevice`.
* Open the folder named after your device's name.
* Select the crash logs named after the application you're testing.
* Choose **Finder > Services > Mail > Send File**.
* In the New Message window, enter `beta@noverse.com` in the To field and `application_name` crash logs from `your_name` (for example, MyTestApp crash logs from Anna Haro) in the Subject field.
* Choose **Message > Send**.
* In the Finder, you may delete the crash logs you sent to avoid sending duplicate reports later.

### Sending Crash Reports from Windows

To send crash logs to developers, enter the crash log directory (Vista/Win7 or XP) in the Windows search field, replacing `user_name` with your Windows user name.

Crash log storage on Windows Vista/7: `C:\Users\user_name\AppData\Roaming\Apple computer\Logs\CrashReporter/MobileDevice`

Crash log storage on Windows XP: `C:\Documents and Settings\user_name\Application Data\Apple computer\Logs\CrashReporter`

Open the folder named after your device's name and send the crash logs for the application you're testing in an email message using the subject-text format `application_name` crash logs from `your_name` (for example, MyTestApp crash logs from Anna Haro) to `beta@noverse.com`.
