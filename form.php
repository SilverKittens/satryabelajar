<?php
				$to      = 'bagusatrya1901@gmail.com';
				$subject = 'pesan';
				$message = 'Pesan ini dari ' . $_POST["nama_depan_pengunjung"] . '-' . $_POST["email_pengunjung"] . $_POST["pesan_kesan"] ;
				mail($to, $subject, $message);
				header('Location: index.php');
?>
