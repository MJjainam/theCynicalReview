<?php
	session_start();
	
?>
<html>
<head><title>Logging out</title></head>
<body style="margin-top:280;margin-left:600;">
	<h3><?php echo $_SESSION["username"]?>,You have succesfully logged out </h3>
	<a style="margin-left:100" href="login.html"><strong>Go to login page </strong></a>
</body>
</html>
<?php
	$_SESSION['username']=null;
	session_abort(); 
?>