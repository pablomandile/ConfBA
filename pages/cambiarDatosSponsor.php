<?php
include '../php/conexion.php';

// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

$id=$_GET['id_sponsor'];
$sql = "SELECT * FROM registro WHERE id_sponsor=$id";
$resultado = mysqli_query($conexionBD,$sql);
//var_dump($resultado);
$fila = mysqli_fetch_array($resultado);
$sponsorOroChecked = '';
$sponsorPlataChecked = '';
if($fila['tipoSponsor']=='Sponsor Plata'){
    $sponsorPlataChecked = 'checked';
} else {
    $sponsorOroChecked = 'checked';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Talks Bs As - Modificar datos sponsor</title>
    <?php include ('../views/linksCssJs.html'); ?>
</head>
<body>
    <header><?php include ('../php/header.html');?></header>
    <main>
        <div id="tituloFormModificar" class="col text-uppercase text-center">
            <h2>Modificar datos sponsor</h2>
            
        </div>
        
        <form action="../php/actualizar.php" method="POST" id="datosoradorModificar">
        <a id="bt-volver" href="../php/listado.php"><button  type="button" class="btn btn-primary mb-4">Volver</button></a>
            <input type="hidden" name="id" value="<?php echo $fila['id_sponsor']?>" >
            <div class="row mt-3 mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="nombre" name="nombre" value="<?php echo $fila['nombre']?>" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido" aria-label="apellido" name="apellido" value="<?php echo $fila['apellido']?>" required>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" aria-label="correo" name="correo" value="<?php echo $fila['correo']?>" required>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col">
                            <input type="text" class="form-control" placeholder="Telefono" aria-label="telefono" name="telefono" value="<?php echo $fila['telefono']?>" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Empresa" aria-label="empresa" name="empresa" value="<?php echo $fila['empresa']?>" required>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <p>Informanos quienes serán los participantes que serán VIP</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre y apellido" aria-label="vip1" name="vip1" value="<?php echo $fila['vip1']?>" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre y apellido" aria-label="vip2" name="vip2" value="<?php echo $fila['vip2']?>" required>
                </div>
            </div>
            <p>Elige el tipo de sponsor</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Sponsor Plata" <?php echo $sponsorPlataChecked ?>>
                <label class="form-check-label" for="inlineRadio1">SPONSOR PLATA</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sponsor Oro" <?php echo $sponsorOroChecked ?>>
                <label class="form-check-label" for="inlineRadio2">SPONSOR ORO</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" aria-label="comentarios" name="comentarios" 
                    style="height: 100px" value=""></textarea>
                <label for="floatingTextarea2">Dejanos un comentario</label>
                <script>
                    var myTextArea = document.getElementById('floatingTextarea2');
                    myTextArea.innerHTML = '<?php echo $fila['comentarios']?>';
                </script>
            </div>
            <p id="conv3" class="text-secondary fs-6 mb-2">Las credenciales llegarán por correo en 5 días hábiles</p>
            <button id="bt-submit-up" type="submit" class="btn btn-primary mb-4">Actualizar Datos</button>
      
            
        </form>
    </main>
    <?php include ('../views/misScriptsJs.html');?>
    <footer><?php include ('../views/footer.html');?></footer>

</body>
</html>