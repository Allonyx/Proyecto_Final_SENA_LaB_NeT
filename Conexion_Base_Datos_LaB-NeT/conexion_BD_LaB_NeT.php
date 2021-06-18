<?php
    $link = 'mysql:host=localhost;dbname=cursos';
    $usuario = 'root';
    $clave = '';
    try {
        $pdo = new PDO($link, $usuario, $clave);
        echo ' Conectado <br>';
    } catch (PDOException $e) {
        print "Error: " . $e->getMessage() . "<br>";
        die();
    }
?>