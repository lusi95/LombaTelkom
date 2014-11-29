<?php
	include('check_connection.php');

	$name = $email = $alamat = $id_user = $username = $password = $city = $provinsi = $phone = $dir ="";

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
		$dir = "dir/".$id_user;
	}

	$sql = "INSERT INTO users (id_user, name, alamat, email, username, password, city, provinsi, phone, dir_path) VALUES ('".$id_user."', '".$name."', '".$alamat."', '".$email."', '".$username."', '".$password."', '".$city."', '".$provinsi."', '".$phone."', '".$dir."')";

	if($conn->query($sql) === TRUE) {
		
		if(!file_exists($dir)){
                $dir_success = mkdir($dir);
                $dir_success = mkdir($dir."/music");
                $dir_success = mkdir($dir."/photo");
                $dir_success = mkdir($dir."/video");
        }

		echo "Berhasi Insert";
	}else {
		echo "Error : ".$sql."<br><br>".$conn->error;
	}

	$conn->close();
?> 