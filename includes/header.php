<?php ob_start(); ?>
<?php session_start(); ?>
<?php include"db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>amarabook</title>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<nav>
		<div class="topnav"></div>
		<div class="logo">
			<a href="#"><img src="img/amarabook.png" alt="logo"></a>
		</div>
		<div class="menu">
			<ul class="menu-lists">
				<li><a href="#">Home</a></li>
				<li><a href="#">Flights</a></li>
				<li><a href="#">Buses</a></li>
				<li><a href="#">Hotels</a></li>
			</ul>
		</div>
	</nav>
</body>
</html>