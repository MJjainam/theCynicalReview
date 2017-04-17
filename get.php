
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
			$row = explode(",",$arr[$i]);

			break;
		}	
	}
	$name=$row[0];
	$year=$row[1];
	$summary=$row[2];
	$image_path=$row[3];
	$actor1=$row[4];
	$actor2=$row[5];
	$director=$row[6];
	$producer=$row[7];
	$rating=$row[8];

	echo json_encode($row);


	
		
?>