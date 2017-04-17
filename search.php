<?php require("establish_conn.php"); ?>
<?php $query="select * from movie_para where name='{$_GET['search']}'";
	
	
$result= mysqli_query($connection,$query); ?>
<pre>
<?php $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	$name=$row["name"];
	$summary=$row["summary"];
	$image_path=$row["image"];
	
		
?>
</pre>
<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

  
	</body>
</html>


