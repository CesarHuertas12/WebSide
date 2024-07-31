<?php
    session_start();
    $usuario = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="container">
        <nav>
            <span class="logo">NATIONAL TOURS</span>
            <ul id="lista">
                <li>INICIO</li>
                <a href="pakage.html"><li>PAQUETES</li></a>
                <li>PORTAFOLIO</li>
                <a href="us.html"><li>ACERCA DE NOSOTROS</li></a>
                <a href="login.html"><li>INICIAR SESION</li></a>
            </ul>
        </nav>
      
        <header>
            <h1>BIENVENIDOS</h1>
            <h2>Disfruta del viaje</h2>
            <p>Registrate para reserva !YA un viaje con nosotros <br> y disfrutar de unas celebras vacaciones en tus lugares favoritos</constantemente></p>
            <button type="button">
                Mas Informacion
            </button>
        </header>
        <div class="icons">
            <i class='bx bxl-invision'></i>
            <i class='bx bxl-dropbox' ></i>
            <i class='bx bxl-linkedin' ></i>
        </div>
        <div> 
                <?php
                    echo "<pre> <h1 align='right'>SESIÓN: $usuario </h1> </pre>";
                ?>
                <form action="eliminar.php" method="post" name="form" align='right'>
                    <input type="text" name="nombre" />
                    <input type="submit" value="eliminar cuenta" />
                </form>
                <form action="update.php" method="post" name="form2" align='right'>
                    <input type="text" name="email" />
                    <input type="submit" value="actualizar cuenta" />
                </form>
        </div>
    </div>
    
    <script src="script/changeName.js"></script>
</body>
</html>