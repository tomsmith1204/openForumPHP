<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
	include 'modules/mySQLConnector.php';
	include 'modules/header.php';

	$query = mysql_query("SELECT * FROM USERS");

	echo '<br>
		  <table class="table table-striped">
		  	<thead>
				<tr>
					<th>User ID</th>
					<th>User Name</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>';

	/**
	* loop to iterate through entire table, set values
	* for specific columns from each row and use
	* those values to populate the table
	*/ 
	while ($row = mysql_fetch_array($query)) {
      	$userID = $row['User_ID'];
        $userName = $row['User_Name'];
        $pass = $row['Password_Hash'];
        echo "<tr>";
        echo "<td>".$userID."</td>";
        echo "<td>".$userName."</td>";
        echo "<td>".$pass."</td>";
        echo "</tr>";
   	}

    echo '</tbody>
    </table>';

    include 'modules/footer.php';
    
    //peaceout
    mysql_close($connection);
?>