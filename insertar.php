<?php
include 'conexion.php';

//modelo vista controlador..M (base datos)  Vistas (visual)   C (controla los acceso)

//insertar datos en base de datos...

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<br>";
echo "************";
echo $_POST['nombre'];
echo "************";

echo "<br>";

echo "************";
echo $_POST['apellido'];
echo "************";

echo "<br>";

echo "************";
echo $_POST['dni'];
echo "************";




echo "<br>";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];


$insertar = "INSERT INTO registro(id_usuario, nombre, apellido,dni, telefono,correo, password) VALUES (null,'$nombre', '$apellido', '$dni', '$telefono', '$correo', '$password')";

$insert = mysqli_query($conexion,$insertar);


if(!$insert){

    echo "<br>";
    echo "no se ha insertado nada";
}else{
    echo "esta todo ok se inserto el dato";
}



?>