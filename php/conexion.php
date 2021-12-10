<?php
$lugarBD = "localhost";
$nombreBD = "alumnos2023";
$usuarioBD = "root";
$claveBD = "";

$conexionBD = mysqli_connect($lugarBD, $usuarioBD, $claveBD, $nombreBD);
if (mysqli_connect_errno()){
    echo "Se produjo un error en la conexión a la base de datos: ".mysqli_connect_errno()."<br>";
}else{
    echo "Se conectó a la base de datos correctamente <br>";
}
?>
