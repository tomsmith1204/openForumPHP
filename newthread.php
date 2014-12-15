<?php
	include 'modules/mySQLConnector.php';
	include 'modules/header.php';
	include 'modules/post-thread.php';

	echo '
	
	<div class="container">
		<div class ="row">
				<div class="panel-heading">
					<h3 class="panel-title">Create a New Topic</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-2 text-center">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Emoticons</h3>
							</div>
							<div class="panel-body">
								<table class="table">
									<tr>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
									</tr>
									<tr>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
									</tr>
									<tr>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
									</tr>
									<tr>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
									</tr>
									<tr>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
									</tr>
									<tr>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
										<td> :) </td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-center">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Thread Content</h3>
							</div>
							<div class="panel-body">
								<form method="post" action="modules/post-thread.php">
						   		<div class="form-horizontal box-margin">
									<div class="form-group">
										<input id="topic-title" name="topic-title" type="text" class="form-control" placeholder="Topic Title " required>
										<br>
											<textarea id="topic-body" name="topic-body" class="form-control" rows="8" placeholder="Enter message" required></textarea>
											<button type="submit" class="btn btn-danger box-margin">Delete Message</button>
											<button id="submit" name="submit" type="submit" class="btn btn-primary">Submit Topic</button>
											<span class="text-danger"><?php echo $error; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>	
	</div>';

    include 'modules/footer.php';
?>