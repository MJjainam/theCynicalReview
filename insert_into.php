<?php
require("establish_conn.php");
if(isset($_POST['name'])){ $name = $_POST['name']; } 
echo $name .",";
if($_POST["password"] != $_POST["password1"])
	die("confirm password does not match to password");
$password=$_POST["password"];
$email=$_POST["email"];
$Phone=$_POST["Phone"];

$query="INSERT INTO login (username,password,email,Phone) VALUES ('{$name}','{$password}','{$email}','{$Phone}')";
if(!$query) {die("not succesful");}
$result= mysqli_query($connection,$query);

   
if(!$result)
{
	die("something went wrong");
}
else 
{
	echo "succesful";
}

?>
 
<!-------------------------- ---------------------------- ----------------------   -->

<html>
	<head>
		<title>inserting values into database</title>
		</head>
<body>	
</body>
</html>
