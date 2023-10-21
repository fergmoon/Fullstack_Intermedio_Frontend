<?php

include '../db/conexion.php';

if (isset($_POST['login_btn'])){
    $id = $_POST['id_person'];
    $pass = $_POST['pass'];  /*recordar que la contraseña se encuentra encriptada*/
    $pass_code = base64_encode($pass);

    $consulta = mysqli_query($conexion, "SELECT id_person, pass FROM users
     where id_person = '$id' and pass = '$pass_code'");

     $exist = mysqli_num_rows($consulta);
     echo $exist;

}

?>