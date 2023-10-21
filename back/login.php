<?php

if (isset($_POST['login_btn'])){
    $id = $_POST['id_person'];
    $pass = $_POST['pass'];

    echo $id.'<br>'.$pass;

}

?>