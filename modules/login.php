<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
include 'mySQLConnector.php';
session_start();

//set error variable to display
$error='';
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
		// Selecting Database
		$db = mysql_select_db("forumDB");
		
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from USERS where Password_Hash = '$password' AND User_Name = '$username'");
		$rows = mysql_num_rows($query);

		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: index.php"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
		}

	//peaceout
	mysql_close($connection);
	}
}
?>