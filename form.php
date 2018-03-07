<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug =  4;
$mail->SMTPAuth=true;
$mail->Host='smtp.gmail.com';
$mail->Port='587';
$mail->SMTPSecure='tls';
$mail->Username='noreplyteknologiinformasi@gmail.com';
$mail->Password='12345678qwe';
$mail->SetFrom('noreplyteknologiinformasi@gmail.com');
$mail->Subject='Pesan Kesan';
$mail->Body = $_POST["pesan_kesan"];
$mail->AddAddress('bagusatrya1901@gmail.com');
if($mail->send())
echo 'sukses';
else
echo $mail->ErrorInfo;
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