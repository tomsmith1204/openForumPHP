<!-- BEGIN HEADER FILE -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"name="viewport" content="width=device-width, initial-scale=1">
	<title>openForum</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">	
    	<link rel="stylesheet" href="css/styles.css">
    	<?php include('login.php');

			if(isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
				$hidelogin = 1;
				echo '<style>
						.login-bar{display: none;}
						.welcome-bar{display: block;}
					  </style>'; 
			} else {
				echo' <style>
						.welcome-bar{display: none;}
					  </style>';

			}
		?>
</head>
<body>
	<header>
		<div class="welcome-bar">Welcome User! <a href="modules/logout.php">Logout</a></div>
		<nav class="navbar navbar-inverse login-bar" role="navigation">
			<div class="container-fluid">
				<span>
					Not a member? Please consider <a href="signup.php">signing up</a>!
				</span>
				<form class="navbar-form navbar-right" role="search" method="post" action="">
					<div class="form-group form-group-sm">
				    	<input id="username" name="username" type="text" class="form-control" placeholder="Username">
				    	<input id="password" name="password" type="text" class="form-control" placeholder="Password">
				  	</div>
				  	<button id="submit" name="submit" type="submit" class="btn btn-success btn-sm">Login!</button>
				  	<br><span class='text-danger'><?php echo $error; ?></span>
				</form>
			</div>
		</nav>
		<div class="container-fluid">
			<h1><a href="index.php"><span class="black">open</span>Forum</a></h1>
		</div>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Nav</a>
		 			</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php">
								Home 
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="userlist.php">User List</a></li>
						<li><a href="forum.php">Subscriptions <span class="badge">12</span></a></li>	      		
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
				    		<input type="text" class="form-control" placeholder="Search">
				  		</div>
				 		<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
<!-- END HEADER FILE -->
