<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1,  shrink-to- fit=no"><!-- Resonsive web -->
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--favicon-->
    <link rel="icon" type="image/gif" href="https://hips.hearstapps.com/es.h-cdn.co/mcres/images/mi-casa/dormitorios-infantiles/videojuegos-gaming-rooms/1860610- 12-esl-ES/gamingrooms-espacios-para-disfrutar-de-los-videojuegos.gif">
    <title>Formulario Registrar</title>
</head>

<body>
    <form action="registrar.php" method="POST">
        <input type="text" class="form-control" name="id_rol_usuario" placeholder="Numero de documento:">
        <hr><br>
        <input type="text" class="form-control" id="inputnombre_usuario" name="nombre_usuario" placeholder="Nombre Usuario: ">
        <hr><br>
        <button type="submit" class="btn btn-primary">LOGIN</button>
        <button type="button" class="btn btn-secundary" onclick = "/Formularios_LaB-NeT/Formulario_login_usuario.php">Registrar</button><br><br>
        <label ><a href="/Formularios_LaB-NeT/Formulario_login_usuario.php">Registrar</a></label>
        <button type ="button"  class="btn btn-primary" onclick = "history.go (-1)">X</button>
        <label ><a href="Index.php">cerar</a></label>
    </form>
</body>

</html>