
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



	
		
?>
<html>
<head>
	<title>Layout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../../css/layout.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css"/>
	<style type="text/css">
		img{
			height: 20px;
			width: 20px;
		}
		div.summary{
			width: 70%;
			height: 70%;
		}
		div.summary p{
			word-wrap : break-word;
			font-size: 120%;
		}
	</style>
</head>
<body>
	

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="logo">
			<a href="../home"><img src="../../images/tcr12.jpg" id="logo"></img></a>
		</div>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
            </button>
			<a href="" class="navbar-brand">The Cynical Review</a>
		</div>
		 <div class="collapse navbar-collapse navbar-right">
		<ul class="nav navbar-nav">
			<li><a href="../../about.html">About us</a></li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Genre <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../../horror.html">Horror</a></li>
					<li><a href="../../scifi.html">Sci-Fi</a></li>
					<li><a href="../../action.html">Action</a></li>
					<li><a href="../../romantic.html">Romantic</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Classics <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../../80.html">80's</a></li>
					<li><a href="../../90.html">90's</a></li>
					<li><a href="../../2000.html">y2k</a></li>
					<li class="divider"></li>
					<li><a href="../../top10.html">Top 10</a></li>
				</ul>
			</li>
			<li><a href="../../about.html#contactus">Contact us</a></li>
			<li><a href="../../logout.php">Logout</a></li>
			</ul>
			<!-- <form action="../../layout.php" method="get" class="navbar-form navbar-left"> -->
				<!-- <div class="form-group"> -->
					<span class="glyphicon glyphicon-search" id="ico"></span> <input type="text" onkeyup="submissionThrottling()" class="form-control" placeholder="Search" id="search" name="search"/> 
				<!-- </div> -->
			<!-- </form> -->
		</div>
	</div>	
	</nav>	<!-- end of nav bar -->
		<!--<div class="content container"></div>-->
	<!-- <div class="container"> -->
	<div class="content container"></div>
	<div class="row">
	<div class="col-md-4">	
	<div class="content container"></div>
	<div style="margin-left:180;margin-top:-60;" class="container">
		<h1 id="0name"><?php echo $name ?> </h1><br/>
		<h4>Rating: <img src="../../images/hollowstar.png" id="1"><img src="../../images/hollowstar.png" id="2"><img src="../../images/hollowstar.png" id="3"><img src="../../images/hollowstar.png" id="4"><img src="../../images/hollowstar.png" id="5"><img src="../../images/hollowstar.png" id="6"><img src="../../images/hollowstar.png" id="7"><img src="../../images/hollowstar.png" id="8"><img src="../../images/hollowstar.png" id="9"><img src="../../images/hollowstar.png" id="10"></h4><br/>
		<table class="cast">
			<thead><h3>Movie Cast</h3></thead>
			<tbody>
				<tr>
					<td cell-spacing="20px" >Actor 1</td>
					<td> ... </td>
					<td id="4act1"><?php echo $actor1 ?></td>
				</tr>
				<tr>
					<td>Actor 2</td>
					<td> ... </td>
					<td id="5act2"><?php echo $actor2 ?></td>
				</tr>
				<tr>
					<td>Director</td>
					<td> ... </td>
					<td id="6dir"><?php echo $director ?></td>
				</tr>
				<tr>
					<td>Producer</td>
					<td> ... </td>
					<td id="7prod"><?php echo $producer ?></td>
				</tr>
				<tr>
					<td>Release Year</td>
					<td> ... </td>
					<td id="1year"><?php echo $year ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
	<div class="col-md-4">
	<div class="summary">
		<div style="margin-top:180;margin-left:80" >
			<legend><h2>Summary: </h2></legend>
			<p id="2summary"><?php echo $summary; echo basename($name) ?></p>
		</div>
	</div>
	</div>
	<div class="col-md-4">
		<img style="margin-top:80;margin-right:180;"src=<?php echo("../../uploads/". str_replace(' ', '',$image_path) ); ?> alt="poster" id="poster"></img>
	</div>
	</div>
	<!-- </div> -->
	</body>
	<footer class="foot">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<h3>Navigate</h3>
					<ul>
						<li><a href="../home">Home</a></li>
						<li><a href="../../about.html">About us</a></li>
						<li><a href="../../about.html#contactus">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Services</h3>
					<ul>
						<li><a href="../home.php">Search a movie</a></li>
						<li><a href="../../add.php">Rate a movie</a></li>
						<li><a href="../../add.php">Add a movie</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Genre</h3>
					<ul>
						<li><a href="../../horror.html">Horror</a></li>
						<li><a href="../../scifi.html">Sci-Fi</a></li>
						<li><a href="../../action.html">Action</a></li>
						<li><a href="../../romantic.html">Romantic</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Classics</h3>
					<ul>
						<li><a href="../../80.html">80's</a></li>
						<li><a href="../../90.html">90's</a></li>
						<li><a href="../../2000.html">y2k</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<footer class="trademark">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					&copy;2015 The Cynical Review. All Rights Reserved &reg;
				</div>
				<div class="col-sm-6">
					<ul class="pull-right">
						<li><a href="../../about.html#contactus">Contact us</a></li>
						<li><a href="../../about.html">About us</a></li>
						<li><a href="../home">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">
		//Get the rating from database and put it into rating
		// var r = prompt("Enter rating");
		var rating=parseInt(<?php echo $rating ?>);
		function rate()
		{
			var i=1;
			while(i<=rating)
			{
				var b = document.getElementById(i);
				b.src="../../images/yellowstar.png";
				i++;
			}
		}
		timer = null;
		function submissionThrottling()
		{

			if(timer)
			{
				clearTimeout(timer);
			}
			timer = setTimeout(populateMovies,1000);
		}
		function populateMovies()
		{
			var searchString = document.getElementById("search").value;
			if(searchString!="")
			{
				xhr = new XMLHttpRequest();
				xhr.onreadystatechange = populateMovies1;
				xhr.open("GET","../../get.php?search="+searchString,true);
				xhr.send();
			}


		}
		function populateMovies1(){
			if(xhr.readyState==4 && xhr.status==200){
				doc = JSON.parse(xhr.responseText);
				document.getElementById("0name").innerHTML = doc[0];
				document.getElementById("1year").innerHTML = doc[1];
				document.getElementById("2summary").innerHTML = "";
				setTimeout(summaryMultiStage,500);
				setTimeout(imageMultiStage,1000);
				document.getElementById("poster").src = "../../uploads/";
				document.getElementById("4act1").innerHTML = doc[4];
				document.getElementById("5act2").innerHTML = doc[5];
				document.getElementById("6dir").innerHTML = doc[6];
				document.getElementById("7prod").innerHTML = doc[7];
			}
		}
		function imageMultiStage()
		{
			document.getElementById("poster").src += doc[3];
		}
		function summaryMultiStage()
		{
			document.getElementById("2summary").innerHTML = doc[2];

		}
		rate();

		function monitor()
		{	
			ev = new EventSource("http://localhost/theCynicalReview/sse.php");
			ev.addEventListener("myevent",updateDiv,false);
			ev.onerror = function() { alert("OOps..server closed");};
		}
		function updateDiv(event)
		{
			// alert(event.data);
			// location.reload();
			window.location.href="http://localhost/theCynicalReview/rest/search/"+document.getElementById("0name").innerHTML.split(" ")[0];
		}
		monitor();
	</script>
	<script src="../../js/jquery-2.1.4.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<!-- <script src="js/script.js"></script> -->
</body>
</html>

