<?php 
session_start();#sessiya rəhbərliyi bu kod yeni butun sehifelerde bu formada yazilmalidir ki butun sehife seni tanisin




#burada color deyerine white dir
$color = "white";

#bu kod yoxlayir eger burada baska bir reng varsa asagdaki $color(dəyişkənə) gonderir  
if (isset($_POST['color'])) {

	#yeni bu $color(dəyişkənə)yerlesdirir ve buda body'deki style=" background-color: <?=$color? >" gonderir
	$color = $_POST['color'];

       #cooki arguman adi;      #cooki dəyəri;      #bu tarixe qeder saxla;   #butun faile'de goster
	setcookie('color',         $_POST['color'],      time()+86400,                '/');


	#burada cooki  dəyişkənə qeydolunur amma sehifeni yenilediyinde sehifeden iter eger sehifede qalmasini isteyirsenizse bu vaxt super globali işə düşər $_COOKI['color']; //echo $_COOKIE['color'];  


}else if (isset($_COOKIE['color'])) { #bu yəni postan Məlumat gəlmirsə amma əvvəldən bir Məlumat secmisəmsə və qeytedmisemsə browsere əgər buvarsa colora bunu qeyted  və sehifenin arxa planinda goster
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

 	<h1>Home page</h1>
 	<form action="index.php" method="POST">
	<input type="radio" name="color" value="white">WHITE <br>
	<input type="radio" name="color" value="red">RED<br>
	<input type="radio" name="color" value="blue">BLUE<br>
	<input type="radio" name="color" value="green">GREEN <br>
	<input type="radio" name="color" value="yellow">YELLOW <br>
	<button >SAVE</button>	

</form>
 </body>
 </html>