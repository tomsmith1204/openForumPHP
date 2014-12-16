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
			<h1>one of us.</h1>
			<div class="row">
				<div class="col-md-6">
					<form method="post" action="modules/newuser.php" class="form-horizontal" role="form">
				  		<div class="form-group">
				    		<label for="username" class="col-sm-2 control-label">Username</label>
				    		<div class="input-group col-sm-10">
				    			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				      			<input type="text" class="form-control" id="username" name="username" placeholder="Choose a Username">
				    		</div>
				  		</div>
				  		<div class="form-group">
					    	<label for="password" class="col-sm-2 control-label">Password</label>
					    	<div class="input-group col-sm-10">
					    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					      		<input type="password" class="form-control" id="password" name="password" placeholder="Choose a Password">
					    	</div>
				  		</div>
				  		<div class="form-group">
				    		<div class="col-sm-offset-2 col-sm-10">
				      			<div class="checkbox">
				        			<label>
				          				<input type="checkbox"> Remember me
				        			</label>
				      			</div>
				    		</div>
				  		</div>
				  		<div class="form-group">
				    		<div class="col-sm-offset-2 col-sm-10">
				      			<button type="submit" id="submit" name="submit" class="btn btn-success">Create Account</button>
				    		</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>                     
	';

include "modules/footer.php";
?>