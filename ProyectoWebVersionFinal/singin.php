<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['emailS'];
        $password = $_POST['passwordS'];
    }
    $aux = 0;
    $conn = new mysqli('localhost','root','','test');
    $users = "SELECT *FROM registration";
    $resultado = mysqli_query($conn, $users);
    
    while($row=mysqli_fetch_assoc($resultado)){
        if($email == $row['email'] and password_verify($password, $row['password'])){
            echo "<script> window.location = '/test/index.php' </script>";
            $aux = 1;
            break;
        }
    }

    if($aux == 0){
        echo "<script> alert('Favor de revisar los datos, ya que alguno es incorrecto');
                            window.location = '/test/login.html' </script>";
    }
?>