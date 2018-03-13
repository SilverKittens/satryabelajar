<?php 
		$servername = "localhost";
		$username = "id4957013_localhost";
		$password = "localhost";
		$dbname = "id4957013_userinfo";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
	$id = $_GET['id'];
	$sql = "SELECT * FROM komentar WHERE id=$id";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
	// jika data yang di-edit tidak ditemukan
	if( mysqli_num_rows($query) < 1 ){
		die("data tidak ada");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="teknologiInformasi.css">
</head>

<body>
<div id="contact" style="padding-top:20px">
	<div style="background-color: navy; padding-bottom: 20px">
		<h1 style="color: white">Edit</h1>
		<br>
			<form action="update.php" method="post">
				<div class="rows">
					<p class="min40" style="color: darkcyan">Nama :</p>
					<input class="komen" type="text" name="nama_depan_komentar" placeholder="Nama anda" style="height: 30px;float: left; width: 30%" value="<?php echo $data['nama'] ?>">
					<input width="0px" height="0px" name="id" value="<?php echo $data["id"]?>">;
				</div>
				<div class="rows">
					<p class="min40" style="color: darkcyan">E-mail :</p>
					<input class="komen" type="email" name="email_komentar" placeholder="Email anda"  style="height:30px;float: left; width: 30%"value="<?php echo $data['email'] ?>">
				</div>
				<div class="rows">
				<textarea class="komen" name="komentar" style="width:50%; height:150px" placeholder="Tuliskan komentar anda disini..." value="<?php echo $data['isi'] ?>"></textarea>
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