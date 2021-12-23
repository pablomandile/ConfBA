<?php
include 'conexion.php';
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// echo "<br>";
// echo "************";
// echo $_POST['nombre'];
// echo "************";

// echo "<br>";

// echo "************";
// echo $_POST['apellido'];
// echo "************";

// echo "<br>";


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$vip1 = $_POST['vip1'];
$vip2 = $_POST['vip2'];
$tipoSponsor1 = $_POST['inlineRadioOptions'];
$comentarios = $_POST['comentarios'];

$insertar = "INSERT INTO `registro`(
    `id_sponsor`,
    `nombre`,
    `apellido`,
    `correo`,
    `telefono`,
    `empresa`,
    `vip1`,
    `vip2`,
    `tipoSponsor`,
    `comentarios`
)
VALUES(
    null,
    '$nombre',
    '$apellido',
    '$correo',
    '$telefono',
    '$empresa',
    '$vip1',
    '$vip2',
    '$tipoSponsor1',
    '$comentarios'

)";
 
$insert = mysqli_query($conexionBD, $insertar);
if(!$insert){
    echo "No se ha realizado la inserción";
    echo mysqli_error($conexionBD);
}else{
    echo "Se inserto el registro";
    header("location: ../pages/listado.php");
}

?>