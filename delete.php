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
		if( isset($_GET['id']) ){
	
		// ambil id dari query string
		$id = $_GET['id'];

		// buat query hapus
		$sql = "DELETE FROM komentar WHERE id=$id";
		$query = mysqli_query($conn, $sql);

		// apakah query hapus berhasil?
		if( $query ){
			header('Location: index.php');
		} else {
			die("Delete failed.");
		}

		} else {
			die("Sorry");
		}


		$conn->close();
?>