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

	$query = mysql_query("SELECT * FROM USERS
						  LIMIT 5");

	echo '<br>
			<div class="container">
			<div class ="row">
				<h1>we are many.</h1>
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
			    </table>
			    <nav>
				  <ul class="pagination">
				    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
				  </ul>
				</nav>
			</div>
		</div>';

    include 'modules/footer.php';
    
    //peaceout
    mysql_close($connection);
?>