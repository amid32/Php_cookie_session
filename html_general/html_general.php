
	<style>
		div, a{
			text-decoration: none;
			
			margin-left: 25px;
		}
	</style>

<div>
	<a href="index.php">HOME</a>
 		<a href="about.php">ABOUT</a>
 		<a href="contact.php">CONTACT</a>
 		<a href="html_general/deleted_cookie.php">DEL/BG</a>
 		
 		<?php 

         if (isset($_SESSION['name'])) { #bu kod yeni istifadeci sehifeye daxil olub 
         	echo '<a style="float: right;" href="login_exit.php">Login exit</a>';
         	echo '<a href="special_to_me.php" style="float:right;">'.$_SESSION['name'].'</a>';
         }else {
         	echo '<a style="float: right;" href="login.php">Login in</a>';
         }
 		 ?>

</div>


