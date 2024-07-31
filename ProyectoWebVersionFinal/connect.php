<?php
	session_start();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = $_POST['user'];
	$strongPass = password_hash($password, PASSWORD_DEFAULT);

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$aux = 0;
		$users = "SELECT *FROM registration";
		$resultado = mysqli_query($conn, $users);

		while($row=mysqli_fetch_assoc($resultado)){
			if($email == $row['email'] || $user == $row['user']){
				$aux = 1;
				break;
			}
		}

		if($aux == 0){
			$stmt = $conn->prepare("insert into registration(name, email, password, user) values(?, ?, ?, ?)");
			$stmt->bind_param('ssss', $name, $email, $strongPass, $user);
			$execval = $stmt->execute();
			echo $execval;
			echo "<script> alert('Su cuenta fue registrada exitosamente');
                            window.location = '/test/index.php' </script>";
			$stmt->close();
			$conn->close();
		}
		else{
			echo "<script> alert('El correo o usuario ya existe, favor de ingresar uno distinto');
                            window.location = '/test/login.html' </script>";
		}
	}
?>