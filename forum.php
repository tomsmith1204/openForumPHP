<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
	include 'modules/header.php';
	include 'modules/mySQLConnector.php';

	/**
	* get thread title and start date from THREADS table,
	* use the User_ID stored in the THREADS table to
	* get the corresponding User_Name in the USERS table
	*/
	$query = mysql_query("SELECT THREADS.Title, THREADS.Date, USERS.User_Name
				FROM THREADS
				INNER JOIN USERS 
				ON THREADS.USER_ID=USERS.User_ID
				GROUP BY Date DESC");

	echo '
		<button id="new-thread-btn" type="button" class="btn btn-success">New Thread </button>
		<br>
		  <table class="table table-striped">
		  	<thead>
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Started On</th>
				</tr>
			</thead>
			<tbody>';

	/**
	* iterate through all results from query, assigning
	* values from columns belonging to each row 
	* construct a the table body from those values
	*/
	while ($row = mysql_fetch_array($query)) {
        $title = $row['Title'];
        $body = $row['User_Name'];
        $date = $row['Date'];
        echo "<tr>";
        echo "<td>".$title."</td>";
        echo "<td>".$body."</td>";
        echo "<td>".$date."</td>";
        echo "</tr>";
   	}

    echo '</tbody>
    </table>';

    include 'modules/footer.php';
    
    //peaceout
	mysql_close($connection);
?>