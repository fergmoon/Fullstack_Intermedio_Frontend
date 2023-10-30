<?php
/*Archivo de conexión a DB*/

$server = "localhost";
$user = "root";
$pass = "";
$db = "fernando_gomez_di";

$conexion = new mysqli($server,$user,$pass,$db);
// $conexion = new mysqli("localhost","root","","fernando_gomez_di"); se reemplaza por lo de arriba

if ($conexion->connect_errno){
    echo "error de conexion";
    exit();
}else{
    // echo "Conexión OK-";
}




?>