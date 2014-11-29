<?php
	include('check_connection.php');

	$email = $id_user = $username = $password = $dir = "";

	if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
		$password = hash("sha256", $_POST["password"]);
		$password2 = hash("sha256", $_POST["password2"]);
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = $_POST["email"];
				$id_user = hash("sha256", $email);
				$username = $_POST["username"];
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

				include("login.php");
			}else {
				echo "Error : ".$sql."<br><br>".$conn->error;
				include("index.php");
			}
		}
	} else
		include("index.php");
	$conn->close();
?> 