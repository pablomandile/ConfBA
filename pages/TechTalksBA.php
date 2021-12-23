<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Talks Bs As</title>
    <?php include ('../views/linksCssJs.html'); ?>
</head>
<body>
    <header>
        <?php 
            include ('../php/header.php'); 
            include ('../views/carrusel.html'); 
        ?>
    </header>
    <main>
        <?php 
            include ('../views/cardsConfBA.html'); 
            include ('../views/donde.html'); 
            include ('../views/serOrador.html'); 
        ?>
    </main>
    <script src="../js/home.js"></script>
    <script src="../js/formulario.js"></script>
    <footer>
        <?php include ('../views/footerConfBA.html');?>
    </footer>
</body>
</html>
