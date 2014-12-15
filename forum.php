<?php
	include 'modules/header.php';
	include 'modules/mySQLConnector.php';

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
?>