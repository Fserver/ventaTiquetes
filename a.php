<?php

if (isset($_POST['nombre']) ) {
    if ( !empty($_POST['nombre'] ) ) {

        $nombres = $_POST["nombre"];
        $longitud = strlen($nombres);

        if ($longitud>=5) {

            include "conexion.php";
        
            $c = conectar();
        
        
            $sql = "INSERT INTO datos (nombres) VALUES('{$nombres}');";
            $c->query($sql);
        }else{
            
        }

    }
}
?>