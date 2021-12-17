<?php
include 'conexion.php';
$consulta = mysqli_query($conexionBD, "SELECT * FROM registro" );
// echo "<pre>";
// var_dump($consulta);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONF BSAS - Listado de Sponsors</title>
    <?php include ('../views/linksCssJs.html'); ?>
</head>
<body>
    <header><?php include ('../views/header.html');?></header>
    <main>
        <!--Listado de Sponsors-->
        <div class="row">
                <div class="col text-uppercase text-center">
                <h2>Listado usuarios registrados</h2>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                <table class="table table-primary table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Invitado 1</th>
                        <th scope="col">Invitado 2</th>
                        <th scope="col">Invitado 3</th>
                        <th scope="col">Sponsoreo</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    while( $tabla = mysqli_fetch_array($consulta)){ ?>
                        <tr>
                        <td> <?php echo $tabla['id_sponsor']; ?> </td>
                        <td> <?php echo $tabla['nombre']; ?> </td>
                        <td> <?php echo $tabla['apellido']; ?> </td>
                        <td> <?php echo $tabla['correo']; ?> </td>
                        <td> <?php echo $tabla['empresa']; ?> </td>
                        <td> <?php echo $tabla['telefono']; ?> </td>      
                        <td> <?php echo $tabla['vip1']; ?> </td>  
                        <td> <?php echo $tabla['vip2']; ?> </td>  
                        <td> <?php echo $tabla['vip3']; ?> </td>  
                        <td> <?php echo $tabla['tipoSponsor']; ?> </td>  
                        <td> <?php echo $tabla['comentarios']; ?> </td>                   
                        <td> <a href="actualizar.php?id_sponsor=<?php echo $tabla['id_sponsor']; ?>"> Actualizar </a> </td>
                        <td> <a href="eliminar.php?id_sponsor=<?php echo $tabla['id_sponsor']; ?>"> Eliminar </a> </td>
                        </tr>
                        <?php } ?>  
                    </tbody>
                </table>
        </main>
        <?php include ('../views/misScriptsJs.html');?>
        <footer><?php include ('../views/footer.html');?></footer>
</body>
</html>