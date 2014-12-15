<?php

/*
	*****CREDITS: PLEASE DO NOT DELETE*****
	*		 Written by Thomas Smith      *
	*		   	      2015                *
	*		  tomsmith1204@gmail.com      *
	***************************************
*/	

/*
	this is to estalish a connection to your MySQL database. In order to connect,
	the three parameters of mysql_connect as well as the single parameter of 
	mysql_select_db must be changed. Below is an example for a locally hosted server connecting 
	to a database named openForumDB. If you are hosting the database on your own machine
	to test this software, you can use 'localhost' in place of the ip.

	mysql_connect('192.168.0.1', 'tom', 'youShallNot');

	mysql_select_db(openForumDB);
*/

$link = mysql_connect('your_server_ip_or_localhost', 'your_mysql_username', 'your_mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db(your_database_name);
?>
