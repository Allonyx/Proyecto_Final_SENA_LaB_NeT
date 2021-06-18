<?php
    session_start(); # Sentencia de sistema para iniciar la sesión
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    +0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG 2x" crossorigin="anonymous">
    <link rel="icon" type="image/gif"
    href="https://phoneky.co.uk/thumbs/screensavers/down/fcelebs/search_5ryql94k.gif">
    <title>Formulario Inicio de Sesión</title>
</head>
<body>
    <form action="registrar.php" method="POST">"
        <input type="text" class="form-control" name="id_rol_admin" placeholder="Numero de documento:">
        <hr><br>
        <input type="text" class="form-control" id="inputnombre_admin" name="nombre_admin" placeholder="Nombre Administardor: ">
        <hr><br>
        <button type ="button"  class="btn1"><a href="inicio_sesion.php">LOGIN</a></button>
        <br><br>
        <h2>Bienvenido: <?php echo isset($_SESSION['nombre_rol'])? $_SESSION['nombre_rol']: 'Invitado' ?></h2>
        <hr><br>
        <button type ="button"  class="btn2"><a href="Cerrar_sesion.php">Cerrar Sesión</a></button>
</body>
</html>