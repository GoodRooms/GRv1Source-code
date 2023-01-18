GoodRooms Version 1.0 Source Code Manual
You can use this source code freely for your Revival



What is this?
=============
This is a Patched version of GoodRooms version 1.0 Source Code

Learn the structure
====================
You have to learn the basic structure of this Source Pack
root - Contains all the common files and folders
|
|__/asset - The Asset Folder, It contains a file that should not be touched
|
|__/CSS - Contains the Basic CSS
|__/Images
        |__/ feed-icons - The Feed Icon, it is not used here but you may use it
        |
        |__/ Badges - The Site Badges, It is not used here but you may use it


How do i setup this?
====================
This source code pack is very flexible, it can support your custom code with ease
Before checking any other file, you have to change the config.php Database, if you're using a Web hosting provider, you will have to change the Database
If you're self-hosting the site in your pc. you may leave the connection like that, after this, you will have to setup a Database for GoodRooms

Setting up the Database
========================
if you're in a hosting provider, it may give you a predefined database name, then some characters for you to insert (example: m(account id)_ will be the name of the database, after _ you can put anything you like, this time, you have to put goodrooms)
in Self-Hosting you just have to make a goodrooms database
After you create the database, you have to run this SQL
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

Customizing the Source Code
============================

Images
======
The Preset Images are from 2007-2009 ROBLOX
you may change the image roblox_logo.png and Logo_267_70.png to suit your Needs. Althrough the Logos are not used
in this source pack, the logo is not used, but you can put it using the <img> tag

Custom Code
===========
You can put custom code in this Pack, By Default. it only comes with the 
authentication system, header, head, dashboard, db config and htaccess
You can modify the files to give it any aspect you would like
It also supports alot of CMS like WordPress to use, here is a list of recommended CMS

Recommended CMS
===============
This is a list of all the Recommended CMS for every type
1. WordPress (Great for Blog/Developers Journal)
2. phpBB  (Great for Forums)
3. MyBB (Another Great Solution for Forums)



Credits
=======
This source code was made by the GoodRooms Team (Previously we're amazing Team)
GoodRooms Can be found in bluegr.cf
If you wanna. you can support GoodRooms by keeping <meta property="og:author" content="Made with GoodRooms v1 Source!"> in head.php
Thanks to every contributor who helped to make this Project Possible!
NOTE: You may trash this file after finishing setting up