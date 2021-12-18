<?php
include 'conexion.php';
echo "<pre>";
var_dump($_POST);
echo "</pre>";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$vip1 = $_POST['vip1'];
$vip2 = $_POST['vip2'];
$tipoSponsor1 = $_POST['inlineRadioOptions'];
$comentarios = $_POST['comentarios'];
$id = $_POST['id'];


$actualizarBD = mysqli_query($conexionBD,$actualizar);

$actualizar = "UPDATE `registro` SET(
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
    '$nombre',
    '$apellido',
    '$correo',
    '$telefono',
    '$empresa',
    '$vip1',
    '$vip2',
    '$tipoSponsor1',
    '$comentarios'
) WHERE id_usuario = '$id'";
?>