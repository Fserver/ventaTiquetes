<?php

include "conexion.php";

$c = conectar();

$sql = "SELECT nombres FROM datos";
$v1 = $c->query($sql);

$contador=0;
while($fila = $v1 -> fetch_assoc()){
    $contador ++;
    echo "<option value='$contador'> {$fila['nombres']} </option>";
}

// foreach ($v1 as $key) {
//     printf( '<hr>'.$key['fecha']);
// }