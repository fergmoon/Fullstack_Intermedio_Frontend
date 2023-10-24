<?php

// echo '<!DOCTYPE html>';// Resto de tu código PHP
// header('Content-Type: text/html; charset=utf-8');

include '../db/conexion.php';

if (isset($_POST['login_btn'])){
   $id = $_POST['id_person'];   
   $pass = $_POST['pass'];  /*recordar que la contraseña se encuentra encriptada*/
   $pass_code = base64_encode($pass);

   // echo "Consulta SQL: " . "SELECT * FROM users where id_person = '$id' and pass = '$pass_code'" . "<br>";

   //echo $id. '<br>' .$pass_code;  //impresion verificacion de recepcion de datos

   // echo "Antes de la consulta";
   // echo "ID: " . $id . "<br>";
   // echo "Pass Code: " . $pass_code . "<br>"; 

   $consulta = mysqli_query($conexion, "SELECT * FROM users
   where id_person = '$id' and pass = '$pass_code'") or die(mysqli_error($conexion));

   // echo "Después de la consulta";   

   $exist = mysqli_num_rows($consulta);
   //echo $exist;   //impresion para verificar cantidad de registros

      if ($exist == 1){
         session_start();      
         while($datos = mysqli_fetch_array($consulta)){ /*trae TODOS los datos de la bd en la variable datos cíclica*/
            var_dump($datos);
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
