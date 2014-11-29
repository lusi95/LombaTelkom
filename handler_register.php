<?php
	include('check_connection.php');

	$name = $email = $alamat = $id_user = $username = $password = $city = $provinsi = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$alamat = $_POST["alamat"];
		$id_user = hash("sha256", $email);
		$username = $_POST["username"];
		$password = hash("sha256", $_POST["password"]);
		$city = $_POST["city"];
		$provinsi = $_POST["provinsi"];
		$phone = $_POST["phone"];
	}

	$sql = "INSERT INTO users (id_user, name, alamat, email, username, password, city, provinsi, phone) VALUES ('".$id_user."', '".$name."', '".$alamat."', '".$email."', '".$username."', '".$password."', '".$city."', '".$provinsi."', '".$phone."')";

	if($conn->query($sql) === TRUE) {
		echo "Berhasi Insert";
	}else {
		echo "Error : ".$sql."<br><br>".$conn->error;
	}

	$conn->close();
?> 