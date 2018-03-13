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

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
?>