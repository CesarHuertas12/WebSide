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
        $user = "SELECT *FROM registration WHERE id = '$userId'";
    }
    else{
        echo "<script> alert('Correo no encontrado');
                            window.location = '/test/index.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styleEdit.css">
</head>
<body>
    <form class = "container-table" action = "processUpdate.php" method="post">
        <div class = "table-title">Actualizar Datos</div>
        <div class = "table-header">Nombre</div>
        <div class = "table-header">Email</div>
        <div class = "table-header">Usuario</div>
        <div class = "table-header">Password</div>
        <div class = "table-header">Actualizar</div>

        <?php $resultado = mysqli_query($conn, $user);
        while($row = mysqli_fetch_assoc($resultado)) {?>
            <input type = "text" class= "table-item" value = "<?php echo $row['id']; ?>" name = 'id'></input>
            <input type = "text" class="table-item" value = "<?php echo $row['name']; ?>" name = 'name'>
            <input type = "text" class="table-item" value = "<?php echo $row['email']; ?>" name = 'email'>
            <input type = "text" class="table-item" value = "<?php echo $row['user']; ?>" name = 'user'>
            <input type = "text" class="table-item" value = "<?php echo $row['password']; ?>" name = 'password'>
            <?php } ?>
            <input type = "submit" value = "Actualizar" class = "container-submit">
    </form>
</body>
</html>