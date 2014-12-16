<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
session_start();

//kill session and redirect user to index page.
if(session_destroy()){
	header("Location: ../index.php"); // Redirecting To Home Page
}

?>