<?php

include "conexion.php";
$c = conectar();

if( !empty($_POST["nombres"]) && isset($_POST["reloj"]) && isset($_POST["calendario"]) )
{
    // print $_POST["reloj"]."<br>";
    // print $_POST["calendario"];
    $fecha = $_POST["calendario"] ." ". $_POST["reloj"];
    // str_replace("/", "-", $fecha);

    $nombres = $_POST["nombres"];


    $sql = "INSERT INTO usuario (nombre, fecha) VALUES('{$nombres}', '{$fecha}');";
    $c->query($sql);
}else echo "No ha llenado los datos correctamente";

header("Location:p.html");

?>

