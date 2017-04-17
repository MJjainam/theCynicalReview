<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/about.css"/>
	<title> Add movie </title>
	<style type="text/css">
		body{
			background-image: url(images/background/Elegant_Background-4.jpg);
			background-attachment: no-repeat contain;
		}
		img{
			width: 40px;
			height:40px;
		}
		input{
			border-radius: 5px;
		}
		input#submit{
			width: 150px;
			height: 35px;
		}
		table#add{
			float:left;
		}
		table#add td{
			width:  50px;
			height: 40px;
		}
		div#preview img{
			margin-left: 100px; 
			width: 400px;
			height: 300px;
		}
		div.rate{
			padding-left: 100px;
		}		
		p#rating{
			font-size: 200%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="logo">
			<a href="home.php"><img src="images/TCR.jpg" id="logo"></img></a>
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
			<li><a href="about.html">About us</a></li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Genre <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="horror.html">Horror</a></li>
					<li><a href="scifi.html">Sci-Fi</a></li>
					<li><a href="action.html">Action</a></li>
					<li><a href="romantic.html">Romantic</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Classics <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="80.html">80's</a></li>
					<li><a href="90.html">90's</a></li>
					<li><a href="2000.html">y2k</a></li>
					<li class="divider"></li>
					<li><a href="top10.html">Top 10</a></li>
				</ul>
			</li>
			<li><a href="about.html#contactus">Contact us</a></li>
			<li><a href="logout.php">Logout(<?php session_start(); echo $_SESSION['username']; ?>)</a></li>
			</ul>
			<form action="layout.php" method="get" class="navbar-form navbar-left">
				<div class="form-group">
					<span class="glyphicon glyphicon-search" id="ico"></span> <input type="text" class="form-control" name="search" placeholder="Search" id="search"/> 
				</div>
			</form>
		</div>
	</div>	
	</nav>	<!-- end of nav bar -->
	<div class="content container"></div>
	<div class="container">
	<form method="post" action="form_processing.php" enctype="multipart/form-data">
		<table id="add">
			<thead><h1>Enter Movie Details</h1></thead>
			<tbody>
			<tr>
				<th>Movie Name: </th>
				<td><input name="name" class="form-control" type="text" placeholder="Enter The movie name" required/></td>
			</tr>
			<tr>
				<th>Poster: </th>
				<td><input type="file" name="fileToUpload" id="fileToUpload" onblur="pic()" required></td>
			</tr>
			<tr>
				<th>Year Released: </th>
				<td><input type="text" class="form-control" name="year" placeholder="released date" required/></td>
			</tr>
			<tr>
				<th rowspan="2">Actors: </th>
				<td><input type="text" class="form-control" name="actor1" placeholder="Actor 1" required/></td>
			</tr>
			<tr>
				<td><input type="text" class="form-control" name="actor2" placeholder="Actor 2" required/></td>
			</tr>
			<tr>
				<th>Director: </th>
				<td><input type="text" class="form-control" name="director" placeholder="Director" required/></td>
			</tr>
			<tr>
				<th>Producer: </th>
			<td><input type="text" class="form-control" name="producer" placeholder="Producer" required/> </td>
			</tr>
			<tr>
				<th>Summary: </th>
				<td><textarea  name="summary" rows="4" cols="36" required> </textarea></td>
			</tr>
			<tr>
				<th>Rating: </th>
				<td><input class="form-control" id="rating" type="text" name="rating" placeholder="Rating" required/></td>
			</tr>
			<tr>
				<td rowspan="2"><input id="submit" type="submit" value="Add Movie!"/></td>
			</tr>
			</tbody>
		</table>
		
	</form>
	<div id="preview" >
			<img src="images/anonymous_movies_quotes_typogr_1920x1080_wallpaperfo.com.jpg">
			
	</div>
	<h3><strong>Rating: </strong></h3>	<img src="images/hollowstar.png" id="1" onmouseover="color(1)" onclick="change(1)">
				<img src="images/hollowstar.png" id="2" onmouseover="color(2)" onclick="change(2)">
				<img src="images/hollowstar.png" id="3" onmouseover="color(3)" onclick="change(3)">
				<img src="images/hollowstar.png" id="4" onmouseover="color(4)" onclick="change(4)">
				<img src="images/hollowstar.png" id="5" onmouseover="color(5)" onclick="change(5)">
				<img src="images/hollowstar.png" id="6" onmouseover="color(6)" onclick="change(6)">
				<img src="images/hollowstar.png" id="7" onmouseover="color(7)" onclick="change(7)">
				<img src="images/hollowstar.png" id="8" onmouseover="color(8)" onclick="change(8)">
				<img src="images/hollowstar.png" id="9" onmouseover="color(9)" onclick="change(9)">
				<img src="images/hollowstar.png" id="10" onmouseover="color(10)" onclick="change(10)">
							<!--	<br/><p id="rating">Your Rating Here</p> -->
	<div class="rate pull-right">
	
		<div class="container content">
			
			</div>
		</div>
		</div>
<footer class="foot">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<h3>Navigate</h3>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="about.html#contactus">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Services</h3>
					<ul>
						<li><a href="home.php">Search a movie</a></li>
						<li><a href="add.php">Rate a movie</a></li>
						<li><a href="add.php">Add a movie</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Genre</h3>
					<ul>
						<li><a href="horror.html">Horror</a></li>
						<li><a href="scifi.html">Sci-Fi</a></li>
						<li><a href="action.html">Action</a></li>
						<li><a href="romantic.html">Romantic</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Classics</h3>
					<ul>
						<li><a href="80.html">80's</a></li>
						<li><a href="90.html">90's</a></li>
						<li><a href="2000.html">y2k</a></li>
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
						<li><a href="about.html#contactus">Contact us</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="home.php">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">
		var clicked = 0;
		function color(val)
		{
			if(clicked==0)
			{
				clear();
				var i = 1;
				while(i<=val)
				{
					var b = document.getElementById(i);
					b.src="images/greenstar.png";
					i++;
				}
				var c= document.getElementById("rating");
				c.value = i-1;
			}
		}
		function change(val)
		{
			clear();
			var i = 1;
			while(i<=val)
			{
				var b = document.getElementById(i);
				b.src="images/yellowstar.png";
				i++;
			}
			var c= document.getElementById("rating");
			c.value = i-1;
			clicked++;
		}
		function clear()
		{
			var i = 1;
			while(i<=10)
			{
				var b = document.getElementById(i);
				b.src="images/hollowstar.png";
				i++;
			}
			var c= document.getElementById("rating");
			c.value="";
		}
		function pic()
		{
			var a = document.getElementById("fileToUpload");
			var b = document.getElementById("preview");
			b.src = a.value;
		}
	</script>
</body>
</html>	
