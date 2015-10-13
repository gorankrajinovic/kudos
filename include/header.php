<!DOCTYPE html>
<head>
	<title>Sabiranje/oduzimanje sa tri člana</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/functions.js" defer="true"></script>
	<style>
/*div {
	display: block;
	float: left;
	width: 18px;
	margin: 5px;
}*/

.form-control {
	
	width: 70px;
	float: left;
	display: block;
}

.broj {
	width: 5%;
	min-width: 20px;
	float: left;
}

.operacija {
	width: 5%;
	min-width: 20px;
	float: left;
}

.jednako {
	width: 5%;
	min-width: 20px;
	float: left;
}


.t_rez{
	width: 300px;
}
</style>

</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
				</button>
				<a class="navbar-brand" href="index.php">Matematika</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Početna</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Zadaci sa 2 člana
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
							<li><a href="./index.php?zadaci=2x20">Brojevi do 20</a></li>
								<li><a href="./index.php?zadaci=2x50">Brojevi do 50</a></li>
								<li><a href="./index.php?zadaci=2x100">Brojevi do 100</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">index sa 3 člana
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="./index.php?zadaci=3x20">Brojevi do 20</a></li>
									<li><a href="./index.php?zadaci=3x50">Brojevi do 50</a></li>
									<li><a href="./index.php?zadaci=3x100">Brojevi do 100</a></li>
								</ul>
							</li>
						</ul>
						<!--      <ul class="nav navbar-nav navbar-right">-->
						<!--        <li><a href="#"><div class="glyphicon glyphicon-user"></div> Sign Up</a></li>-->
						<!--        <li><a href="#"><div class="glyphicon glyphicon-log-in"></div> Login</a></li>-->
						<!--      </ul>-->
					</div>
				</div>
			</nav>
			<script>
	$(document).ready(function(){
    $(".active a").click(function(){
        console.log('kliknuo');
    });
});


</script>
