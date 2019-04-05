<html>
	<head>
		<style>
		*{box-sizing:border-box;}
		
		.container{margin:5px;
		background-color:black;
		opacity:0.5;
		margin-top:5px;
		padding-left:280px;}

		.row:after{content:"";
		display:table;
		clear:both;}
		
		.part{width:20%;
		margin-right:5px;
		float:left;
		color:white;
		padding:5px;
		}
		.part a,p{display:block;
		margin:5px;
		text-align:left;
		color:white;
		text-decoration:none;}
		
		.part a:hover{
		color:red;
		opacity:1;
		font-size:22px;}
		.part h1{text-align:left;
		color:green;}
		.part:first-child{margin-left:5px;}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="part">
					<h1>Menu</h1>
					<a href="#">Home</a>
					<a href="#">About</a>
					<a href="#">Service</a>
					<a href="#">Team</a>
					<a href="#">Signup</a>
					<a href="#">Login</a>
				</div>
				<div class="part">
					<h1>Choose</h1>
					<a href="#">Car</a>
					<a href="#">Bike</a>
					<a href="#">Cycle</a>
				</div>
				<div class="part">
					<h1>Team Member</h1>
					<p>Ajay Makwana</p>
					<p>Patel Fenil</p>
					<p>Vishal Rathod</p>
				</div>
			</div>
		</div>
	</body>
</html>