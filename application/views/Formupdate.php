<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/teknologiInformasi.css')?>">
</head>

<body>
	<div style="padding-top:20px">
		<div style="background-color: navy; padding-bottom: 20px">
			<h1 style="color: white">Edit</h1>
			<br>
				<form action="update.php" method="post">
					<div class="rows">
						<p class="min40" style="color: darkcyan">Nama :</p>
						<input class="komen" type="text" name="nama_depan_komentar" placeholder="Nama anda" style="height: 30px;float: left; width: 30%" value="">
						<input width="0px" height="0px" name="id" value="">;
					</div>
					<div class="rows">
						<p class="min40" style="color: darkcyan">E-mail :</p>
						<input class="komen" type="email" name="email_komentar" placeholder="Email anda"  style="height:30px;float: left; width: 30%"value="">
					</div>
					<div class="rows">
					<textarea class="komen" name="komentar" style="width:50%; height:150px;float:left;marin: 0px auto" placeholder="Tuliskan komentar anda disini..."></textarea>
					</div><br><br>
					<div class="rows">
					<input type="submit" name="tombol" value="Submit" style="font-size: 25px;margin: 0 auto">
					</div>
				</form>

				<br>
		</div>
	</div>
</body>
</html>
