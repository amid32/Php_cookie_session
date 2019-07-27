<?php 
session_start();#sessiya rəhbərliyi bu kod yeni butun sehifelerde bu formada yazilmalidir ki butun sehife seni tanisin



if (!isset($_SESSION['name'])) {#bu kod yeni daxil olmayibsa index sehifesine yonlendir
	header('location:index.php');
	
}




$color = "white";
 if (isset($_COOKIE['color'])) {
	$color = $_COOKIE['color'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$_SESSION['name']; ?></title>
</head>
<body style="background-color:<?=$color?>;">
 	<nav>
 		<?php include 'html_general/html_general.php' ?>
 	</nav>
<h1><?=$_SESSION['name']; ?></h1>
<img src="test.jpg" alt="test.jpg">
<br><hr>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>