<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
	//create_cat.php
	include 'modules/mySQLConnector.php';
	include 'modules/header.php';

    $query = mysql_query("SELECT User_Name, Post_Count
                FROM USERS
                GROUP BY Post_Count DESC");
         
	echo '
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-9">
                	<table class="table table-hover">
  						<tr>
  							<th></th>
 	  						<th>Title</th>
	  						<th>Author</th>
	  						<th>Started On</th>
	  						<th>Replies</th>
	  						<th>Last Post</th>
                		</tr>
                		<tr>
							<td></td>
							<td><a href="#">Did anyone see Game of Thones last night?</a></td>
							<td><a href="#">Lady Stoneheart</a></td>
							<td>Today @ 11:57AM</td>
							<td>12 Replies
							<td>by: <a href="#">Halfman</a></td>
                		</tr>
                		<tr>
                			<td></td>
							<td><a href="#">Leshawn McCoy for President!</a></td>
   							<td><a href="#">BirdsOfPrey03</a></td>
    						<td>Today @ 9:25AM</td>
    						<td>2 Replies</td>
    						<td>by: <a href="#">Fuck_Dallas</a></td>
                		</tr>
                		<tr>
                			<td></td>
							<td><a href="#">New iPhone cracked screen</a></td>
							<td><a href="#">Steve Unemployed</a></td>
							<td> Dec 7 @ 11:12PM </td> 
							<td> 52 Replies </td> 
							<td>by: <a href="#">Nelson Muntz</a> </td> 
						</tr>
                		<tr>
                			<td> </td> 
                			<td><a href="#">Where are my keys</a></td>
                			<td> <a href="#">Sonofa...</a> </td>
                			<td> Dec7 @ 6:22PM </td>
                			<td> 2 Replies </td>
                			<td> by: <a href="#">Your_Wife</a> </td>
                		</tr>
					</table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                    	<thead>
                            <tr>
                    		  <th> Top Posters </th>
      					    </tr>
                        </thead>
                        <tbody>';
                        for ($i = 4; $i > 0; $i--){
                                while ($row = mysql_fetch_array($query)) {
                                    $userName = $row['User_Name'];
                                    echo "<tr>";
                                    echo "<td>".$userName."</td>";;
                                    echo "</tr>";
                                }
                            }
                        echo '
                        </tbody>    
					</table>
                </div>
            </div>
		</div>
	</div>';

	include 'modules/footer.php';

    //peaceout
    mysql_close($connection);
?>