<?php
include '../php/conexion.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <?php include ('../views/linksCssJs.html'); ?>
</head>
<body>
<header>
    <?php 
        include ('../php/header.html'); 
    ?>
    </header>
    <main>
        <?php include ('../views/registroUsuario.html');?>
    </main>
    <?php include ('../views/misScriptsJs.html');?>
    <footer>
        <?php include ('../views/footer.html');?>
    </footer>
</body>

</html>