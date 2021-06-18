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
    <title>Formulario Registrar Rol</title>
</head>

<body>
    <form action="registrar.php" method="POST">
        <label for="inputnombre_estudiante">Identificación Estudiante</label>
        <input type="text" class="form-control" name="id_rol" placeholder="Identificación Estudiante">
        <hr>
        <label for="inputnombre_estudiante">Nombre Estudiante</label>
        <input type="text" class="form-control" id="inputnombre_estudiante" name="nombre_estudiante" placeholder="nombre estudiante">
        <hr>
        <label for="inputcorreo">Correo</label>
        <input type="email" class="form-control" id="inputcorreo" name="correo" placeholder="correo electrónico">
        <hr>
        <label for="floatingTextarea">Comments</label>
        <div class="form-floating">
            <textarea rows="6" cols="30" class="form-control" name="cuadro_texto" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-secundary">Borrar</button><br><br>
        <button type ="button"  class="btn btn-primary" onclick = "history.go (-1)">Regresar</button>
    </form>
</body>

</html>