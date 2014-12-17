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
	<div class="container">
		<div class ="row">
			<h1>join the conversation.</h1>
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
			</table>
			<button id="new-thread-btn" type="button" class="btn btn-success">New Thread </button>
			<span class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Sort Order
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
			  </ul>
			</span>
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