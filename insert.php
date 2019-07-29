<?php 
include 'mysql/connect.php';




if (isset($_POST['send'])) {
	$username1 = htmlentities($_POST['username']) ;
	$passw1 = $_POST['passw'];
	$name1 = htmlspecialchars($_POST['name']);
    $sql1 = "INSERT INTO user(username,passw,name)
    VALUES('$username1','$passw1','$name1')";

    if (mysqli_query($conn, $sql1)) {
    	echo "<script>alert('You ar data successfully');</script>";
    }else {
    	echo "Error: ".$sql1."<br>".mysqli_error($conn);
    }
}


mysqli_close($conn);




#arxa sehifenin goruntusu
$color = "white";
 if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
}
#arxa sehifenin goruntusu


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insert</title>
 	<style type="text/css">
 		
 		form {
display: inline-block;
padding-bottom:10px;
 		}
 		input{
 			
 			width: 300px;
 			padding: 10px;

 		}
 	</style>
 </head>
 <body style="background-color:<?=$color?>;">
 	<nav>
 		<?php include 'html_general/html_general.php' ?>
 	</nav>
 <h1>Welcome accaunt</h1>
 <form action="#" method="POST">
 	<input type="text" name="username" placeholder="username">
 	<br><br>
 	<input type="password" name="passw" placeholder="password">
 	<br><br>
 	<input type="text" name="name" placeholder="Firstname lastname">
 	<br><br>
 	<button name="send">Accaoun</button>
 </form>
 </body>
 </html>