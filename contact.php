<?php 
session_start();#sessiya rəhbərliyi bu kod yeni butun sehifelerde bu formada yazilmalidir ki butun sehife seni tanisin






$color = "white";

if (isset($_COOKIE['color'])) { 
	$color = $_COOKIE['color'];
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cooki_example</title>
 </head>
 <body style="background-color:<?=$color?>;">
 	<nav>
 		<?php include 'html_general/html_general.php' ?>
 	</nav>
 	<h1>Contact page</h1>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <br>
 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <br>
 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non <br>
 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 
 </body>
 </html>