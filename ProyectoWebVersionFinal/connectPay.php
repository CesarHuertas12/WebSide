<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nameCard = $_POST['nameCard'];
		$numberCard = $_POST['numberCard'];
		$postalCode = $_POST['postalCode'];
	}
	$usuario = $_SESSION['email'];
    $numeroTarjeta = $_SESSION['numberCard'];
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pay(nameCard, email, numberCard ,postalCode) values(?, ?, ?, ?)");
		$stmt->bind_param('ssss', $nameCard, $usuario, $numberCard ,$postalCode);
		$execval = $stmt->execute();
		$_SESSION['numberCard'] = $numberCard;
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		header("Location: recibo.php");
		die();	
	}
?>