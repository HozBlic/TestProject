	SOURCES: 
MVC skeleton: https://github.com/DavidMoniz/Simple-MVC-without-a-framework/blob/master/README.md
	>I used this source for implementation of routing system
Login/logout system: https://www.makeitsimple.co.in/PHP_loginexmp.php
Custom fields: https://phppot.com/php/php-contact-form-with-custom-fields/

	DATABASE:
For this PHP system to work, a connection to a database is needed. I used MySQL, made a connection
using phpmyadmin through WAMPserver. 
	Host: "localhost"
	Username: "root"
	Password: "" 
	Name: "magebittest"

	!!!Database "magebittest" have to exsist before running website.!!!
	!!!Table "users" have to exsist before running website, SQL script is included in folder "resources".!!!

If logged in user decides to fill in additional information for the first time, a table will be
created for him/her. Table name will be user's email without symbols. For example: 'test123@gmail.com' 
will turned into 'test123gmailcom'.

	STYLE:
In given example blue buttons were responsive, but I couldn't export it from .psd file. At least I made 
yellow buttons work as required.
	