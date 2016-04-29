<!DOCTYPE html>
<?php
	require_once('nav.php');
?>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="signin">
		<label>User Name :</label>
		<input type="text" id="uname"></input><br/><br/>
		<label>Password  :</label>
		<input type="password" id="pass"></input><br/><br/>
		<a href="#">Forgot Password</a>	
			<a href="#" class="btn btn-success" role="button">Sign In</a>
				
	</div>


	<div class="signup">
	<p>Create Your Account</p>
	<h3>Sign Up Now and Enjoy Exciting Offers.</h3>

	<label>Full Name: </label>
	<input type="text" id="fullname"></input><br/><br/>

	<label>Email: </label>
	<input type="email" id="email"></input><br/><br/>

	<label>Set User Name: </label>
	<input type="text" id="username"></input><br/><br/>


	<label>Set Seurity Question: </label>
	<textarea id="sequs"></textarea><br/><br/><br/>

	<label>Set Answer: </label>
	<textarea id="seans"></textarea><br/><br/><br/>

	<label>Password: </label>
	<input type="password" id="pass"></input><br/><br/>

	<label>Confirm Password: </label>
	<input type="password" id="confirmpass"></input><br/><br/>
			 
	<a href="#" class="btn btn-success" role="button">Sign Up</a>

	
	</div>

	<div class="extra">
		<a href="coxs.php" style="font-size: 50px">Cox's Bazar</a>
		<a href="sylhet.php" style="font-size: 30px">Sylhet</a>
		<a href="kuakata.php" style="font-size: 20px">Kuakata</a>
		<a href="sundarban.php" style="font-size: 30px">Hiron</a>
		<a href="stmartin.php" style="font-size: 50px">St. Martin</a>
		<a href="sundarban.php" style="font-size: 55px">Sundarban</a>
		<a href="coxs.php" style="font-size: 30px">Laboni</a>
		<a href="sylhet.php" style="font-size: 30px">Lalakhal</a>
		<a href="bandarban.php" style="font-size: 55px">Boga Lake</a>
				
	</div>
</body>
</html>