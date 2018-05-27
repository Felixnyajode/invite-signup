###################
What is Invite-Signup
###################

Invite-Signup is a CodeIgnighter 3.0 based PHP+Mysql web application
that creates a invitation based form signup process. Basically it
has the following functionalities.

1. User checks the public page and signs up with Email & other details
2. User recieves a specially generated unique url in Email/SMS.
3. User filles the large form/Discovery Form using this link.
4. User Saves & Submits this form.

In short - like survey monkey, only specific,personalized and cooler.
It is meant for a specific usecase only though. In this case
signup for The Fickle500 application. 

*******************
Release Information
*******************

This repo contains in-development code for future releases.

**************************
Changelog and New Features
**************************
You can find a list of all changes for each release mentioned here.
I would call this version 0.1 - thats a good start.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

1. Copy the Entire Repo on a path in the PHP enables server.
2. Copy the images into ../res/img/ folder
3. Create tables using the .sql files in /DB folder
4. Configure domain specific details in application/config.php 
and application/database.php or the specific envts like
			a. application/development
			b. application/staging
			c. application/production

*******
License
*******
Not Licensed to anyone. Donot use :P

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

I would like to thank codeignighter and the entire technological revolution
for having led to this point.