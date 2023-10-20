<?php
echo "Hola Mundo =)";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['register_btn'])){
    $names = $_POST['names'];
    $lastname = $_POST['lastname'];
    $birth = $_POST['birth'];
    $id_person = $_POST['id_person'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

}
echo $names;









?>