<?php
	include 'mySQLConnector.php';
	include 'login.php';

	if (isset($_POST['submit'])) {

		//make new threadID by adding one to the number of rows in the THREADS table
		$userID = mysql_num_rows(mysql_query("SELECT * FROM USERS")) + 1;

		$username = $_POST['username'];
		$password = $_POST['password'];

		//Send the data  to the THREADS database
		mysql_query("INSERT INTO USERS (User_ID, User_Name, Password_Hash, Post_Count) 
			 	     VALUES ('$userID', '$username', '$password', '0')");

		//start session for new user
		$_SESSION['login_user']=$username;
	
		//peaceout
		mysql_close($connection);
		header("location: ../forum.php");

	}
?>