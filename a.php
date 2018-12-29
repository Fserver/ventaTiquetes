<?php
    if (isset($_POST['nombre']) ) {
        if ( !empty($_POST['nombre'] ) ) {

            $nombres = $_POST["nombre"];
            $fecha = $_POST["hora"];
            $longitud = strlen($nombres);

            if ($longitud>=5) {

                include "conexion.php";
            
                $c = conectar();
            
                $sql = "INSERT INTO datos (nombres, fecha) VALUES('{$nombres}', '{$fecha}');";
                $c->query($sql);

                echo "Registro exitoso!";

            }else echo "Este nombre no tiene 4 caracteres";
            
        }else echo "Debe introducir un nombre con mas de 4 caracteres";
    }