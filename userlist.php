<?php
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
?>