<?php
	include 'mySQLConnector.php';
	session_start();
	if (isset($_POST['submit'])) {

		//get username from session and select corresponding userID from DB
		$name = $_SESSION['login_user'];
		$userQuery = mysql_query("SELECT User_ID FROM USERS WHERE User_Name = '$name'");
		$userRow = mysql_fetch_row($userQuery);
		$userID = $userRow[0];

		//make new threadID by adding one to the number of rows in the THREADS table
		$threadID = mysql_num_rows(mysql_query("SELECT * FROM THREADS")) + 1;

		//get the other stuff ready
		$title = $_POST['topic-title'];
		$body = $_POST['topic-body'];
		$date = date('Y-m-d H:i:s');

		//Send the data  to the THREADS database
		mysql_query("INSERT INTO THREADS (Thread_ID, User_ID, Title, Date, Body) 
			 	     VALUES ('$threadID', '$userID', '$title', '$date', '$body')");
	
		//peaceout
		mysql_close($connection);

		header("location: ../forum.php");
	}
?>