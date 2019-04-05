<?php include('header.php'); ?>

<div class="container p-5 login_form">
	<h1 class="login_header text-white text-center p-2">Login Form</h1>
	<form method="post" id="login_form">
		<div class="form-group">
			<label style="font-size: 14px;">Enter UserName :</label>
			<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input id="username" type="text" class="form-control" name="username">
    		</div>
		</div>

		<div class="form-group">
			<label style="font-size: 14px;">Enter Password :</label>
			<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input type="password" name="password" class="form-control" id="password"/>
    		</div>
		</div>
		
		<div class="form-group">
			<a href="forgetpassword.php" class="text-info" style="font-size: 16px; color : #197d62">Forget Password</a>
		</div>
    	<br/>
		<div class="d-flex justify-content-center">
			<input type="submit" value="Login" name="login" class="btn btn_button"/>
		</div>
	</form>
</div>

<?php include('footer.php'); ?>