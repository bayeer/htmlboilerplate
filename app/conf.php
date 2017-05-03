<?php

/* SMTP settings  */

// Set the hostname of the mail server
define('MAIL_HOST', 'ssl://smtp.mail.ru');
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
define('MAIL_PORT', 465);
//Username to use for SMTP authentication - use full email address for gmail
define('MAIL_USERNAME', "test@mail.ru");
//Password to use for SMTP authentication
define('MAIL_PASSWORD', "test123");

define('SITE_DOMAIN', 'htmlboilerplate.dev');