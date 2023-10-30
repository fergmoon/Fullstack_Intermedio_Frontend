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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.3.67/css/materialdesignicons.min.css">
    <script src="https://kit.fontawesome.com/0b9545bc74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.3.0/model-viewer.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js">
    <link rel="stylesheet" href="https://matthew.wagerfield.com/parallax/deploy/jquery.parallax.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../css/Estilos/style_p">
    <title>Welcome</title>

</head>

<body>

<!-- opcion no usada -->
    <!-- <section class="welcome_container">
        <h2>Welcome to my site!!!</h2>
        <img src="../img/home/5-caracteristicas-que-definen-al-diseno-minimalista-moderno.jpg" alt="imagen-01">
    </section> -->
    <!-- Agrega el elemento <model-viewer> donde desees mostrar el modelo -->
    <!-- <model-viewer src="path/to/your/model.glb" alt="A 3D model" auto-rotate camera-controls></model-viewer> -->
 
    <!-- opcion letras rojas -->
    <!-- <div id="background" onmousemove="mse(event)" onclick="scr()"></div>
    <div id="welcomeContainer">
        <h1 id="welcome"></h1>
        <p class="saludo_usuario"><?php echo $nombre . ' ' . $apellido; ?></p>

    </div>
    <p id="letters">I change when you move your mouse</p> -->


    <!-- opcion stars -->

    <!-- Starbackground -->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

<!-- parallax text/java -->
<div id="parallax">
  <div class="layer" data-depth="0.6">
  
<!-- text -->
    <div class="some-space">
      <h1>Welcome to my site 
        <?php echo $nombre . ' ' . $apellido; ?>!</h1>
    </div>
  
  </div>
  <div class="layer" data-depth="0.4">
    <div id="particles-js"></div>
  </div>

<!-- Button -->
  <div class="layer" data-depth="0.3">
    <div class="some-more-space1"><a href="../html/fun.html" target="blank">Continue to website</a></div>
  </div>
</div>

<script src="..//js/script_p.js"></script>

</body>

</html>