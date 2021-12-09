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

$consultaTodos = "SELECT * FROM registro";
$consultas = mysqli_query($conexionBD,$consultaTodos);
/*echo "<pre>";
var_dump($consultas);
echo "</pre>";*/
while($listadoUsuarios = mysqli_fetch_array($consultas)){
    echo $listadoUsuarios['id_usuario']." ";
    echo $listadoUsuarios['nombre']." ";
    echo $listadoUsuarios['apellido']." ";
    echo $listadoUsuarios['dni']." ";
    echo $listadoUsuarios['telefono']." ";
    echo $listadoUsuarios['correo']." ";
    echo "<br>";
}

?>
