<?php

include "conexion.php";

$c = conectar();

$sql = "SELECT id, nombres FROM datos";
$v1 = $c->query($sql);

// while($fila = $v1 -> fetch_assoc()){
//     echo "<li> {$fila['id']} </li>";
// }

$outp = $v1->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);