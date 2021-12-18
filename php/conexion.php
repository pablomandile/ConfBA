<?php
$lugarBD = "localhost";
$nombreBD = "u600612487_CONFBA";
$usuarioBD = "u600612487_admin";
$claveBD = "ConfBsAs2022!#";

// $nombreBD = "conferencia2021";
// $usuarioBD = "root";
// $claveBD = "";

$conexionBD = mysqli_connect($lugarBD, $usuarioBD, $claveBD, $nombreBD);
if (mysqli_connect_errno()){
    echo "Se produjo un error en la conexión a la base de datos: ".mysqli_connect_errno()."<br>";
}else{
    // echo "Se conectó a la base de datos correctamente <br>";
}
?>
