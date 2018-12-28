<?php

    include "conexion.php";
    $c = conectar(); 
    // $nombres = $_POST["nombres"];
    $nombres = "Felipe4";
    ini_set('date.timezone', 'Etc/GMT-5');
    $fecha = date("Y/m/d h:i:s");
    
    $sql = "INSERT INTO usuario (nombre, fecha) VALUES('{$nombres}', '{$fecha}');";
    $c->query($sql);

?>
