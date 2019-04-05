<html>
	<head>
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			*{box-sizing:border-box;}
			
			body{background-image:url('img/1.jpg');
			margin-top:5px;
			padding:0}
			
			img{float:left;
			width:100px;
			height:100px;
			clear:right;}
			
			.mid-1{overflow:hidden;
			background-color:white;
			margin-top:5px;
			height:40px;}
			
			.mid-2{float:right;}
			
			.mid-2 a{display:inline-block;
			color:black;
			font-weight:bold;
			font-size:17px;
			padding:8px 12px;
			text-align:center;
			border-radius:5px;
			text-decoration:none;}
			
			.mid-2 a.active{background-color:green;
			border-radius:5px;}
			.mid-2 a:hover:not(.active){background-color:green;
			border-radius:5px;
			color:white;
			opacity:0.8;}
			
		</style>
	</head>
	<body>
		<div>
			<img src="img/logo.jpg" alt="Logo of website" />
		</div>
		
		<div class="mid-1">
			<div class="mid-2">
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Service</a>
				<a href="#">Team</a>
				<a href="#" style="color:red;">Login</a>
			</div>
		</div>
		<?php
		include("signup.php");
		?>
	</body>
</html>