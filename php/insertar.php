<?php
include 'conexion.php';

header("location: registro.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$insertar = "INSERT INTO `registro`(
    `id_usuario`,
    `nombre`,
    `apellido`,
    `dni`,
    `telefono`,
    `correo`,
    `password`
)
VALUES(
    null,
    'Victoria',
    'Sandman',
    26455789,
    1544488652,
    'victorias@gmail.com',
    123456
)";
 
$insert = mysqli_query($conexionBD, $insertar);
if(!$insert){
    echo "No se ha realizado la inserción";
    echo mysqli_error($conexionBD);
}else{
    echo "Se inserto el registro";
}

?>