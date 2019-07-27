<?php 

 #cooki arguman adi;      #cooki dəyəri;      #bu tarixe qeder saxla;   #butun faile'de goster
	setcookie('color',         "",      time()-3600,                '/');
                                                     #silme tarixi

header('location:../index.php');

 ?>