<!DOCTYPE html>
<html>
<head>
	<title>SignUp Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	h1{background-color:silver;
		text-align:center;
		opacity:0.8;}
		
	.container{border:2px solid red;
		border-radius:5px;
		margin-top:40px;
		float:right;
		width:450px;
		height:auto;
		padding:12px 20px;
	}
	
	input[type=text], input[type=password], input[type=email] ,input[type=date]{
		width:100%;
		opacity:0.7;
		padding:12px 20px;
		margin:8px 0;
		display:inline-block;
		border:1px solid #ccc;
		box-sizing:border-box;
		border-radius:5px;
	}
	
	input:hover,focus{opacity:1.0;}
	
	button{border-radius:5px;
		width:100%;
		background-color:green;
		padding:14px 20px;
		color:white;
		margin:8px 0;
		cursor:pointer;
		opacity:0.7;
	}
	
	button:hover{opacity:1.0;}
	span.psw{float:right;
		padding:16px;
		font-weight:bold;
	}

	</style>
</head>

<body>

<form>
<div class="container">
	<h1>SignUp to RRX</h1>
	<input style="float:left;" type="text" name="fname" placeholder="Enter Name as Driving License" rquired>
	<br/>
	<input type="email" name="email" placeholder="E-mail (Your Username)">
	<br/>
	<input type="text" name="mobi" placeholder="Enter Mobile Number" required>
	<br/>
	<input type="password" name="psw" placeholder="Enter Password" required>
	<br/>
	<input type="date" name="dob" placeholder="Date of Birth" required>
	<br/>
	<input type="checkbox" checked>I agree with <a href="#" style="color:red;">Term and Conditions.</a>
	<br/>
	<button type="submit"><b>SignUp</b></button>
	<br/>
	<div>
		<span class="psw">Already Registered?<a href="login.html">Login</a></span>
	</div>
</div>
</form>
</body>
</html>