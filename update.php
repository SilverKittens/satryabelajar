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
		if($_POST["tombol"]=="Submit"){
			$nama=$_POST['nama_depan_komentar'];
			$email=$_POST['email_komentar'];
			$isi=$_POST['komentar'];
			$id=$_POST['id'];
			$sql = "UPDATE komentar SET `nama`='$nama', `email`='$email', `time`=CURRENT_TIMESTAMP, `isi`='$isi' WHERE `id`='$id'";

			$query = mysqli_query($conn, $sql);
			if( $query ) {
				header('Location: index.php');
			} else {
				die("Failed to update");
			}


		} else {
			die("Sorry");
		}
		$conn->close();
?>