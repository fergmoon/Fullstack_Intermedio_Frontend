<?php

// echo '<!DOCTYPE html>';// Resto de tu código PHP
// header('Content-Type: text/html; charset=utf-8');

include '../db/conexion.php';

if (isset($_POST['login_btn'])){
    $id = $_POST['id_person'];
    $pass = $_POST['pass'];  /*recordar que la contraseña se encuentra encriptada*/
    $pass_code = base64_encode($pass);

   //echo $id. '<br>' .$pass_code;  //impresion verificacion de recepcion de datos

   

   $consulta = mysqli_query($conexion, "SELECT id_person, pass FROM users
    where id_person = '$id' and pass = '$pass_code'");

    $exist = mysqli_num_rows($consulta);
    //echo $exist;   //impresion para verificar cantidad de registros
     
     if ($exist == 1){
         session_start();      
         while($datos = mysqli_fetch_array($consulta)){ /*trae TODOS los datos de la bd en la variable datos cíclica*/
            $_SESSION['nombre'] = $datos['names'];
            $_SESSION['apellido'] = $datos['lastname'];
            $_SESSION['nacimiento'] = $datos['birth'];
            $_SESSION['usuario'] = $datos['id_person'];
            $_SESSION['email'] = $datos['email'];                        
      }
      header('location: ../app/index.php');
   }else{
   header('location: ../html/index.php?status=3');
   }

}

?>