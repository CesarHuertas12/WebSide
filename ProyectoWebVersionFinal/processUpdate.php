<?php
    session_start();
    $conn = new mysqli('localhost','root','','test');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $password = $_POST['password'];

    $update = "UPDATE registration SET name='$name', email='$email', user='$user', password='$password' WHERE id='$id'";
    $result = mysqli_query($conn, $update);
    echo "<script> alert('Los datos fueron actualizados correctamente');
                            window.location = '/test/index.php' </script>";

?>