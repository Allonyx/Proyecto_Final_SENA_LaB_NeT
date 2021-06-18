<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--favicon-->
    <link rel="icon" type="image/gif" href="https://hips.hearstapps.com/es.h-cdn.co/mcres/images/mi-casa/dormitorios-infantiles/videojuegos-gaming-rooms/1860610- 12-esl-ES/gamingrooms-espacios-para-disfrutar-de-los-videojuegos.gif">
    
</head>

<body>
    <button type ="button"  class="btn btn-primary" onclick = "history.go (-1)">Regresar</button>
    <?php
    //Capturando con el metodo POST los datos del formulario
    $id_estudiante = $_POST['id_estudiante'];
    $nombre_estudiante = $_POST['nombre_estudiante'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['cuadro_texto'];
    /*echo "<br>";
    echo '<pre>';
    var_dump($id_estudiante);
    var_dump($nombre_estudiante);
    echo '</pre>';*/

    include_once 'conexion.php'; // Inclusión del archivo que realiza la conexión a la BD
    $sql_agregar = 'INSERT INTO mensajes (ID,Nombre,Email,Mensaje)
    VALUES (?,?,?,?)'; //sentencia sql que agrega los datos del usuario
    $senten_agregar = $pdo->prepare($sql_agregar);
        if ($senten_agregar->execute(array($id_estudiante, $nombre_estudiante, $correo, $mensaje))) {
            echo "Agregado a la BD <br>"; // senetencia que verifica si se agregó la información a la BD
        } else {
            echo "Error al agregar el Usuario";
            }
    $senten_agregar = NULL; //cierra la sentencia sql
    $pdo = NULL; //cierra el metodo de conexión PDO
    ?>
</body>