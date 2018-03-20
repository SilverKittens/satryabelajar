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
		$nama=$_POST['nama_depan_komentar'];
		$email=$_POST['email_komentar'];
		$isi=$_POST['komentar'];
		$sql = "INSERT INTO komentar (nama, email,time, isi) VALUES ('$nama', '$email', CURRENT_TIMESTAMP, '$isi')";
		$query = mysqli_query($conn, $sql);	

		// apakah query update berhasil?
			if( $query ) {
				// kalau berhasil alihkan ke halaman list-siswa.php
				header('Location: index.php');
			} else {
				// kalau gagal tampilkan pesan
				die("Failed to create");
			}

		$conn->close();
?>