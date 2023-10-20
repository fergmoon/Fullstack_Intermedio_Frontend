<?php
/*Archivo de conexión a DB*/

$conexion = new mysqli("localhost","root","","fernando_gomez_di");

if ($conexion->connect_errno){
    echo "error de conexion";
    exit();
}




?>