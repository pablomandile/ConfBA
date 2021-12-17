<?php
$lugarBD = "localhost";
$usuarioBD = "root";

$conexion = mysqli_connect("localhost","root","","alumnos2023");

if(mysqli_connect_errno()){
    echo "fallo: ". mysqli_connect_errno();

    $error = 1045;

}else{
    echo "se conecto perfecto desde un archivo aparte";
}

?>