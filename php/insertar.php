<?php
include 'conexion.php';

$insertar = "INSERT INTO registro 
            (id_usuario, nonmbre, apellido, dni, telefono, correo, password)
            VALUES
            (null, 'Victoria', 'Sandman', 26455789, 1544488652, 'victorias@gmail.com', 123456)";
$insert = mysqli_query($conexionBD, $insertar);
if(!$insert){
    echo "No se ha realizado la inserción";
}

?>