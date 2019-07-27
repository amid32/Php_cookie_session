
<?php 
session_start();#sessiya rəhbərliyi bu kod yeni butun sehifelerde bu formada yazilmalidir ki butun sehife seni tanisin



if (isset($_SESSION['name'])) {#bu kod yeni daxil olmayibsa index sehifesine yonlendir
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
 	<title>Cooki_example</title>
 	<style>
	input, button{display:block; margin-bottom: 7px; width: 200px; padding: 10px; border-radius: 10px; border:none;}		
	</style>
 </head>
 <body style="background-color:<?=$color?>;">
 	<nav>
 		<?php include 'html_general/html_general.php' ?>
 	</nav>
 	<h1>USER UOT FORM</h1>

<div class="div1">
	<form action="access_control.php" method="POST">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="passw" placeholder="password">
		<button style="background: #000;color:white;width: 220px;">SEND</button>

	</form>
</div>
 </body>
 </html>


