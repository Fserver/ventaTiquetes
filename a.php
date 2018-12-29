<?php
if (isset($_POST['nombre'])) {
    if (!empty($_POST['nombre'] && strlen($_POST['nombre']) > 5)) {

        $nombres = $_POST["nombre"];
        // $fecha = $_POST["fecha"];

        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d H:i:s");

        $tipoTiket = $_POST["tipoPersona"];
        $idaVenida = $_POST["pasaje"];

        if ($_POST["viajeros"] == null) {
            $totalViajantes = 1;
        } elseif ($_POST["viajeros"] >= 0) {
            $totalViajantes = $_POST["viajeros"] + 1;
        }
        $vendedor = 1;

        include "conexion.php";

        $c = conectar();

        $sql = "INSERT INTO usuario (nombre, fecha, tiquete, pasaje, total, vendedor) VALUES('{$nombres}', '{$fecha}', '{$tipoTiket}', '{$idaVenida}', '{$totalViajantes}', '{$vendedor}');";
        $c->query($sql);

        $nombres = null;
        $fecha = null;
        $tipoTiket = null;
        $idaVenida = null;
        $totalViajantes = null;
        $vendedor = null;

        echo "1";
    } else {
        echo "2";
    }
} else {echo "null";}
