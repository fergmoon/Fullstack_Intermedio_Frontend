<?php

echo '<!DOCTYPE html>';// Resto de tu código PHP
header('Content-Type: text/html; charset=utf-8');
    // echo "acceso correcto";

    session_start();
    include '../db/conexion.php';

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email']; 

// Asegúrate de que las variables estén definidas y tengan valores
// var_dump($nombre);
// var_dump($apellido);

// Asegúrate de que el código se está ejecutando
//echo 'Este código se está ejecutando';

// Línea que imprime las variables
echo '<h1>HOLA '.$nombre.' '.$apellido.'</h1>';
    
?>