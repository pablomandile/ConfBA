
<?php
include 'conexion.php';
$id=$_GET['id_sponsor'];
$datoAeliminar = "DELETE FROM registro WHERE id_sponsor=$id";
$delete = mysqli_query($conexionBD, $datoAeliminar);
if(!$delete){
    echo "No se ha realizado el borrado";
    echo mysqli_error($conexionBD);
}else{
    echo "Se inserto el registro";
    header("location: ../php/listado.php");
}
?>