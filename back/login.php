<?php

include '../db/conexion.php';

if (isset($_POST['login_btn'])){
    $id = $_POST['id_person'];
    $pass = $_POST['pass'];  /*recordar que la contraseña se encuentra encriptada*/
    $pass_code = base64_encode($pass);

    $consulta = mysqli_query($conexion, "SELECT id_person, pass FROM users
     where id_person = '$id' and pass = '$pass_code'");

     $exist = mysqli_num_rows($consulta);
     
     if ($exist == 1){
        session_start();
        while($datos = mysqli_fetch_array($consulta)){ /*trae TODOS los datos de la bd en la variable datos cíclica*/
            $_SESSION['nombre'] = $datos['names'];
            $_SESSION['lastname'] = $datos['lastname'];
            $_SESSION['birth'] = $datos['birth'];
            $_SESSION['id_person'] = $datos['id_person'];
            $_SESSION['email'] = $datos['email'];                        
        }
        header('location: ../app/index.php');
     }else{
        header('location: ../html/index.php?status=3');
     }

}

?>