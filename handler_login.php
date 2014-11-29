<?php
	include('check_connection.php');

	session_start();

	$email = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["username"];
		$password = hash("sha256", $_POST["password"]);
	}

	$sql = "SELECT * FROM users WHERE email = '".$email."'";

	$result = mysqli_query($conn,$sql);
	$finalResult = false;

	while($row = mysqli_fetch_row($result)){
		if ($row[5] == $password ) {
			$finalResult = True;
			$_SESSION['id'] = $row[0];
			$_SESSION['username'] = $row[4];
			$_SESSION['email'] = $row[3];
			
			if(isset($_POST['remember'])){
				setcookie('id',time()+3600);
				setcookie('username', $row[4]. time()+3600);
				setcookie('email', $row[3]. time()+3600);
			}

			echo "Login Sukses";	
		}else {
			echo "Login Gagal : ".$sql."<br><br>".$conn->error;	
		}
	}

	$conn->close();
?>