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

		// sql to delete a record
		// cek apakah tombol daftar sudah diklik atau blum?
		if($_POST["tombol"]=="Submit"){

			// ambil data dari formulir
			$nama=$_POST['nama_depan_komentar'];
			$email=$_POST['email_komentar'];
			$isi=$_POST['komentar'];
			$id=$_POST['id'];
			$sql = "UPDATE komentar SET `nama`='$nama', `email`='$email', `time`=CURRENT_TIMESTAMP, `isi`='$isi' WHERE `id`='$id'";

			//var_dump($sql);exit;
			$query = mysqli_query($conn, $sql);
			//var_dump($query);exit;

			// apakah query update berhasil?
			if( $query ) {
				// kalau berhasil alihkan ke halaman list-siswa.php
				header('Location: index.php');
			} else {
				// kalau gagal tampilkan pesan
				die("Failed to update");
			}


		} else {
			die("Sorry");
		}
		$conn->close();
?>