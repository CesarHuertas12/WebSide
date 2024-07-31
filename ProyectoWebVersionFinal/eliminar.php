<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'post'){
        $email = $_POST['email'];
    }

    $email = $_POST['email'];
    $userId = null;
    $conn = new mysqli('localhost','root','','test');
    //$users = "SELECT FROM registration";
    $resultado = mysqli_query($conn, 'SELECT *FROM registration');

    while($row=mysqli_fetch_assoc($resultado)){
        if($email == $row['email']){
            $userId = $row['id'];
            break;
        }
    }
    

    if($userId != null){
        mysqli_query($conn, "DELETE FROM registration WHERE email = '$email'");
        echo "<script> alert('Se ha eliminado correctamente');
                            window.location = '/test/index.php' </script>";
    }
    else{
        echo "<script> alert('Correo no encontrado');
                            window.location = '/test/index.php' </script>";
    }
?>