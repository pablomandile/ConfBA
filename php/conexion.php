<?php
$lugarBD = "localhost";
$nombreBD = "alumnos2023";
$usuarioBD = "root";
$claveBD = "";

$conexionBD = mysqli_connect($lugarBD, $usuarioBD, $claveBD, $nombreBD);
if (mysqli_connect_errno()){
    echo "Se produjo un error en la conexión a la base de datos: ".mysqli_connect_errno();
}else{
    echo "Se conectó a la base de datos correctamente";
}

$consultaTodos = "SELECT * FROM registro";


$consultas = mysqli_query($conexion,$consultaTodos);

echo "<pre>";
var_dump($consultas);
echo "</pre>";