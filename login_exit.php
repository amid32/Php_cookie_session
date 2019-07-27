<?php 
session_start();
session_destroy();#bu kod eyer sexsi sehifeden cixdinsa ve ya browser baglayib acdigdan sonra sexse ait olan verilenler silinir
header('location:index.php');


 ?>