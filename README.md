# \wampp\www\

This is a basic image uploading site developed in CakePHP 2.5.4 stable.
Download as zip and extract it to 'wampp\www\' and rename it as 'register'.

If you download it you should place the 'register' directory inside the 'www' directory
in wampp server's installation folder.

Database Requirements:

1. create necessary DATABASE and TABLEs
2. Registering them with the CakePHP

1->Copy the below code and run it in the phpmyadmin's sql query box.
########################### Copy the below code #########################################
	CREATE DATABASE register;
	USE register;
	CREATE TABLE users(id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
					   username VARCHAR(20),
					   password VARCHAR(50),
					   full_name VARCHAR(100),
					   created DATETIME,
					   modified DATETIME);
	CREATE TABLE content(id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
						 user_id INT(8),
						 path VARCHAR(200),
						 comment TEXT,
						 created DATETIME,
						 modified DATETIME);
############################################################						 

2-> Go to file '/register/app/config/database.php.default' 'database.php' then open
it ad modify following values as given.

	class DATABASE_CONFIG {

		public $default = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',		
			'password' => '',      				#default password is empty
			'database' => 'register',
			'prefix' => '',
			//'encoding' => 'utf8',
		);

		public $test = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'user',
			'password' => 'password',
			'database' => 'test_database_name',
			'prefix' => '',
			//'encoding' => 'utf8',
		);
	}

That's it, all done. You can go with opening opening 
'localhost/register/app/' if it shows any error messages try to solve them.
If no errors you can open 

'localhost/register/contents/'












# CakePHP

[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](http://travis-ci.org/cakephp/cakephp)
[![Latest Stable Version](https://poser.pugx.org/cakephp/cakephp/v/stable.svg)](https://packagist.org/packages/cakephp/cakephp)
[![License](https://poser.pugx.org/cakephp/cakephp/license.svg)](https://packagist.org/packages/cakephp/cakephp)

[![CakePHP](http://cakephp.org/img/cake-logo.png)](http://www.cakephp.org)

CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.
Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.


## Some Handy Links

[CakePHP](http://www.cakephp.org) - The rapid development PHP framework

[CookBook](http://book.cakephp.org) - THE CakePHP user documentation; start learning here!

[API](http://api.cakephp.org) - A reference to CakePHP's classes

[Plugins](http://plugins.cakephp.org/) - A repository of extensions to the framework

[The Bakery](http://bakery.cakephp.org) - Tips, tutorials and articles

[Community Center](http://community.cakephp.org) - A source for everything community related

[Training](http://training.cakephp.org) - Join a live session and get skilled with the framework

[CakeFest](http://cakefest.org) - Don't miss our annual CakePHP conference

[Cake Software Foundation](http://cakefoundation.org) - Promoting development related to CakePHP


## Get Support!

[#cakephp](http://webchat.freenode.net/?channels=#cakephp) on irc.freenode.net - Come chat with us, we have cake

[Google Group](https://groups.google.com/group/cake-php) - Community mailing list and forum

[GitHub Issues](https://github.com/cakephp/cakephp/issues) - Got issues? Please tell us!

[Roadmaps](https://github.com/cakephp/cakephp/wiki#roadmaps) - Want to contribute? Get involved!


## Contributing

[CONTRIBUTING.md](CONTRIBUTING.md) - Quick pointers for contributing to the CakePHP project

[CookBook "Contributing" Section (2.x)](http://book.cakephp.org/2.0/en/contributing.html) [(3.0)](http://book.cakephp.org/3.0/en/contributing.html) - Version-specific details about contributing to the project
