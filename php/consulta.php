<?php
include 'conexion.php';
$consultaTodos = "SELECT * FROM registro";
$consultas = mysqli_query($conexionBD,$consultaTodos);
/*echo "<pre>";
var_dump($consultas);
echo "</pre>";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>DNI</td>
            <td>TELEFONO</td>
            <td>CORREO</td>
        </tr>
            <?php 
            while($listadoUsuarios = mysqli_fetch_array($consultas)){
                echo "<tr>";
                echo "<td>".$listadoUsuarios['id_usuario']."</td>";
                echo "<td>".$listadoUsuarios['nombre']."</td>";
                echo "<td>".$listadoUsuarios['apellido']."</td>";
                echo "<td>".$listadoUsuarios['dni']."</td>";
                echo "<td>".$listadoUsuarios['telefono']."</td>";
                echo "<td>".$listadoUsuarios['correo']."</td>";
                echo "<br> </tr>";
            }
            ?>
        
    </table>


</body>
</html>