<?php
/*
    *****CREDITS: PLEASE DO NOT DELETE*****
    *       Written by Thomas Smith       *
    *                2015                 *
    *        tomsmith1204@gmail.com       *
    ***************************************
*/
	include 'modules/header.php';
	include 'modules/post-thread.php';

	echo '
	
	<div class="container">
		<div class ="row">
					<h1>speak your mind.</h1>
				</div>
				<div class="panel-body">
					<div class="col-md-3 text-center">
						<div class="panel panel-default panel-openForum-main">
							<div class="panel-heading">
								<h3 class="panel-title">Emoticons</h3>
							</div>
							<div class="panel-body">
								<table class="table">
									<tr>
										<td><img src="assets/emoticons/Smiley-1_32.png"></td>
										<td><img src="assets/emoticons/Smiley-2_32.png"></td>
										<td><img src="assets/emoticons/Smiley-3_32.png"></td>
										<td><img src="assets/emoticons/Smiley-4_32.png"></td>
									</tr>
									<tr>
										<td><img src="assets/emoticons/Smiley-5_32.png"></td>
										<td><img src="assets/emoticons/Smiley-6_32.png"></td>
										<td><img src="assets/emoticons/Smiley-7_32.png"></td>
										<td><img src="assets/emoticons/Smiley-8_32.png"></td>
									</tr>
									<tr>
										<td><img src="assets/emoticons/Smiley-9_32.png"></td>
										<td><img src="assets/emoticons/Smiley-10_32.png"></td>
										<td><img src="assets/emoticons/Smiley-11_32.png"></td>
										<td><img src="assets/emoticons/Smiley-12_32.png"></td>
									</tr>
									<tr>
										<td><img src="assets/emoticons/Smiley-25_32.png"></td>
										<td><img src="assets/emoticons/Smiley-14_32.png"></td>
										<td><img src="assets/emoticons/Smiley-26_32.png"></td>
										<td><img src="assets/emoticons/Smiley-16_32.png"></td>
									</tr>
									<tr>
										<td><img src="assets/emoticons/Smiley-17_32.png"></td>
										<td><img src="assets/emoticons/Smiley-18_32.png"></td>
										<td><img src="assets/emoticons/Smiley-19_32.png"></td>
										<td><img src="assets/emoticons/Smiley-20_32.png"></td>
									</tr>
									<tr>
										<td><img src="assets/emoticons/Smiley-27_32.png"></td>
										<td><img src="assets/emoticons/Smiley-22_32.png"></td>
										<td><img src="assets/emoticons/Smiley-23_32.png"></td>
										<td><img src="assets/emoticons/Smiley-24_32.png"></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-center">
						<div class="panel panel-default panel-openForum-main">
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