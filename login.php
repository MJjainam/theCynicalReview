<?php
	session_start();
	$_SESSION['username']=null;
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/home.css"/>
<title> Login </title>
</head>
<body >
	<style>
		body {
			background-image:url("images/encrypt.jpg");
		}
		div.center {
				margin-left:220;
					margin-bottom: 200;
			}
		.signup {
			text-align: center;
		}
		input[type=submit] {
   				   height: 35;
}
	</style>
	<div class="center">
	

	<form class="navbar-form navbar-left" action="home.php" method="post">

		<input type="text" class="form-control" placeholder="enter username" name="username">
		<br>

		<br>
		<input type="password" class="form-control" placeholder="Enter password" name="password">
		</br>
		<br>
		<input class="form-control" style="margin-left:45;" type="submit" value="           Login           "> </input>

		</br>
		<br>
		<h1 style="margin-left:90">  or </h1>
		<br>
		<a class="signup" style="margin-left:70;font-size:25"  href="sign-up.html">Sign up</button>
	</form>
	</div>
	<script>
		
	</script>
</body>
</html>

