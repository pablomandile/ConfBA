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
$tipoSponsor = $_POST['inlineRadioOptions'];
$comentarios = $_POST['comentarios'];
$id = $_POST['id'];

$actualizar = "UPDATE `registro` SET `nombre`='$nombre',`apellido`='$apellido',`correo`='$correo',
`telefono`='$telefono',`empresa`='$empresa',`vip1`='$vip1',`vip2`='$vip2',`tipoSponsor`='$tipoSponsor',
`comentarios`='$comentarios' WHERE id_sponsor = '$id'";

$actualizarBD = mysqli_query($conexionBD,$actualizar);


if(!$actualizarBD){
    echo "No se ha realizado la inserción <br>";
    echo mysqli_error($conexionBD);
}else{
    echo "Se inserto el registro";
    header("location: ../pages/listado.php");
}

?>