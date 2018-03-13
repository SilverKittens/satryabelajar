<?php
				$to      = 'bagusatrya1901@gmail.com';
				$subject = 'pesan';
				$message = 'Pesan ini dari ' . $_POST["nama_depan_pengunjung"] . '-' . $_POST["email_pengunjung"] . $_POST["pesan_kesan"] ;
var_dump("$message");
				mail($to, $subject, $message);
?>
<html>
<head>
<style>
	body{
		background:url(Images/graha.jpg);
		background-size: cover;
	}
	h1,h2{
		text-align: center;
		color: white;
	}
	
	</style>
</head>
<body>


<h1 style="margin: 20px">Terimakasih, telah memberikan pesan kepada kami.</h1> <br>
<br>
<button type="button" style="left: 50%;position: absolute; border-radius: 5px; background-color: palegoldenrod; border: none"><a href="index.php" style="text-decoration: none;font-family:Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif';font-size: 25px">Back</a></button>

</body>
</html>