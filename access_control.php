<?php 
session_start();#sessiya rəhbərliyi bu kod yeni butun sehifelerde bu formada yazilmalidir ki butun sehife seni tanisin


if (isset($_SESSION['name'])) {#bu kod yeni daxil olmayibsa index sehifesine yonlendir
	header('location:index.php');
	}

$message = ''; #bu kod login girisinde eyer adin veya sifre sef dogru olub olmadigin kantrol eder.


#burada fikirlesinki verilenler bazasinda adiniz ve sifreniz var
$member = ['username' => 'timtest','passw' => '12345','name' => 'My name is PHP'];
#burada fikirlesinki verilenler bazasinda adiniz ve sifreniz var




#arxa sehifenin goruntusu
$color = "white";
 if (isset($_COOKIE['color'])) {
	$color = $_COOKIE['color'];
}
#arxa sehifenin goruntusu

#bu kod ad ve sifre dogruise burada $_SESSION['ád'] super global kodunu istifade olunur ki hr bir sehifeye gedende seni tanisin


if (empty($_POST['username'])) { #burada eyer istifade adib boshsa bura bir mesaj gostersin
	$message .= 'username cannot be blank (istifadəçi adı boş ola bilməz)!<br/>'; #istifadəçi adı boş ola bilməz
	
}
if (empty($_POST['passw'])) { #burada eyer istifade adib boshsa bura bir mesaj gostersin
	$message .= 'password cannot be blank (parol boş ola bilməz)<br />'; #parol boş ola bilməz
	
}


#burdaki kodun mentiqi eger mesaj boshsa kodu isesal (burada eslinde kod false olmalidir amma (!) isaresi tersinedir boshsa true ele)
if (!$message) { 
	if ($_POST['username'] == $member['username'] && $_POST['passw'] == $member['passw']) {

		#eyer ad ve sifre duzdurse buzaman mesaj giris duzdur
		$_SESSION['name'] = $member['name']; #buradais butun sehifedi istifade ede bileceyi verilenler qeydedebilecem
		header('location:index.php');
		exit();
		
	}else {
        #eyer ad ve sifre sefdirse buzaman mesaj giris sefdir
        $message .= '<script>alert("istifadəçi adı və şifrə səhvdir");</script>'.'username and password are incorrect (istifadəçi adı və şifrə səhvdir)';
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>User accsess</title>
 </head>
 <body style="background-color:<?=$color?>;">
 <nav>
 		<?php include 'html_general/html_general.php' ?>
 	</nav>
 	<h1>User accsess</h1>
 	<?php if ($message) {echo '<p>'.$message.'</p>';} ?> <!--bu php kodu eger forum boshsa "false" ise duse yox eyer form dolu ise "true" ise duser
 </body>
 </html>