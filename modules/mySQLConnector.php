<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/

$link = mysql_connect('localhost', 'tom', 't@co$alad');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db(forumDB);
?>
