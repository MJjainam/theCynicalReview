
<?php 
	$movie_name = $_GET['search'];
	

	//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	$names = file_get_contents("names.txt");
	$arr = explode("\n", $names);
	for($i=0;$i<count($arr);$i++)
	{

		//echo $arr[$i];
		if(strpos($arr[$i],$movie_name)!==FALSE)
		{
			//echo "asdasdasd";
			//echo $i;
			// echo $arr[$i];
			$row[] = explode(",",$arr[$i]);
		}	
	}
	echo json_encode($row);
?>