<?php
    session_start();
    $login = 'Allonyx.NGS';
    $_SESSION['nombre_rol'] = $login;
    if (isset($_SESSION['nombre_rol'])){
        echo "Sesión Iniciada";
    }
    header('Location:Index.php');
?>