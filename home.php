<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/home.css"/>
	<title>The Cynic Review</title>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="logo">
			<a href="home"><img src="../images/tcr12.jpg" id="logo"></img></a>
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
			<li><a href="../about.html">About us</a></li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Genre <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../horror.html">Horror</a></li>
					<li><a href="../scifi.html">Sci-Fi</a></li>
					<li><a href="../action.html">Action</a></li>
					<li><a href="../romantic.html">Romantic</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Classics <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../80.html">80's</a></li>
					<li><a href="../90.html">90's</a></li>
					<li><a href="../2000.html">y2k</a></li>
					<li class="divider"></li>
					<li><a href="../top10.html">Top 10</a></li>
				</ul>
			</li>
			<li><a href="list">List of all movies</a></li>
			<li><a href="../about.html#contactus">Contact us</a></li>
			<li><a href="http://localhost:8000/logout">Logout</a></li>
			</ul>
			<form action="../layout.php" method="get" class="navbar-form navbar-left">
				<div class="form-group">
					<span class="glyphicon glyphicon-search" id="ico"></span> <input type="text" class="form-control" placeholder="Search" id="search" name="search"/> 
				</div>
			</form>
		</div>
	</div>	
	</nav>	<!-- end of nav bar -->
	<!--<div class="content container"></div>-->
	<header class="bgimage">
		<div class="quote container">
			<h1>So what do you want to watch today?</h1>
			<!-- <form action="layout.php" method="get"> -->
				<div class="form-group">
					<input name="search" type="text" placeholder="Search a movie" id="mainSearch" onkeyup="suggest()"/>
				</div>
				<div id="results">
					
				</div>
			<!-- </form> -->
		</div>
	</header>
	<footer class="foot">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<h3>Navigate</h3>
					<ul>
						<li><a href="home">Home</a></li>
						<li><a href="../about.html">About us</a></li>
						<li><a href="../about.html#contactus">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Services</h3>
					<ul>
						<li><a href="home">Search a movie</a></li>
						<li><a href="../add.php">Rate a movie</a></li>
						<li><a href="../add.php">Add a movie</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Genre</h3>
					<ul>
						<li><a href="../horror.html">Horror</a></li>
						<li><a href="../scifi.html">Sci-Fi</a></li>
						<li><a href="../action.html">Action</a></li>
						<li><a href="../romantic.html">Romantic</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3>Classics</h3>
					<ul>
						<li><a href="../80.html">80's</a></li>
						<li><a href="../90.html">90's</a></li>
						<li><a href="../2000.html">y2k</a></li>
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
						<li><a href="../about.html#contactus">Contact us</a></li>
						<li><a href="../about.html">About us</a></li>
						<li><a href="home">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>
