<?php
	include('check_connection.php');

	$email = $id_user = $username = $password = $dir = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["email"];
		$id_user = hash("sha256", $email);
		$username = $_POST["username"];
		$password = hash("sha256", $_POST["password"]);
		$dir = "dir/".$id_user;
	}

	$sql = "INSERT INTO users (id_user, email, username, password, dir_path) VALUES ('".$id_user."', '".$email."', '".$username."', '".$password."', '".$dir."')";

	if($conn->query($sql) === TRUE) {
		
		if(!file_exists($dir)){
                $dir_success = mkdir($dir);
                $dir_success = mkdir($dir."/music");
                $dir_success = mkdir($dir."/photo");
                $dir_success = mkdir($dir."/video");
        }

		echo "Berhasil Insert";
	}else {
		echo "Error : ".$sql."<br><br>".$conn->error;
	}

	$conn->close();
?> 