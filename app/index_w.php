<?php

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
//echo '<h1 class= saludo_usuario>HOLA '.$nombre.' '.$apellido.'</h1>';

// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Portfolio">
    <meta name="author" content="Luis Fernando Gómez Parada">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="../css/Estilos/style_welcome">  
    <title>Welcome</title>

</head>

<body>

<div id="background" onmousemove="mse(event)" onclick="scr()"></div>
<div id="welcomeContainer"><h1 id="welcome"></h1></div>
<p id="letters">I change when you move your mouse</p>


<script src="../js/script_w.js"></script>
</body>

</html>