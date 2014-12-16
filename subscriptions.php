<?php 
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
	include "modules/header.php";
	include "modules/newuser.php";

	echo '
		<br>
		<div class="container">
			<h1>we have what you like.</h1>
				<div class="col-md-6">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>New Posts</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>This an example post</td>
								<td>12</td>
							<tr/>
							<tr>
								<td>To be replaced by a loop</td>
								<td>3</td>
							<tr/>
							<tr>
								<td>With real content from the database</td>
								<td>16</td>
							<tr/>
						</tbody>
					</table>
				</div>
			</div>
		</div>                     
	';

include "modules/footer.php";
?>