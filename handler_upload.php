<?php
	include('check_connection.php');
	
	session_start();

	if($_FILES["myfile"]["error"]>0 && isset($_POST['upload'])){
		echo "Return Code : ". $_FILES["myfile"]["error"]. "<br>";
	}else{
		$maxsize=1000000000;
		if($_FILES["myfile"]["size"]<=$maxsize){

			$path = $_SESSION['path'];
			$id_user = $_SESSION['id'];
			$type = $_SESSION['type'];
			$file = $_FILES["myfile"]["name"];
			$id_file = hash("sha256", $_SESSION['username'].$file.$type);
			$filepath = $type."/".$file;			
			$insert = "INSERT INTO files (id_file, filepath, jenis_file, id_user) VALUES ('".$user_id."','".$file."')";
				
			mysqli_query($con, $insert);
				
			move_uploaded_file($_FILES["myfile"]["tmp_name"], $path."/".$type."/".$_FILES["myfile"]["name"]);	
		}
	}

	$conn->close();
?>