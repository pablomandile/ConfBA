<?php
// usuario: admin@techtalksba.com.ar
// passw: techtalksba2021

if(session_id() == "")
{
      session_start();
} 
if (isset($_SESSION['loggedIN'])){
    header('Location: ../pages/hidden.php');
    exit();
}

if (isset($_POST['login'])){
    include '../php/conexion.php';
    $email = $_POST['emailPHP'];
    $password = MD5($_POST['passwordPHP']);
    $data = $conexionBD->query("SELECT id_usuario FROM users WHERE correo='$email' AND password='$password'");
    if ($data !== false && $data->num_rows > 0) {
        $_SESSION['loggedIN'] = '1';
        $_SESSION['email'] = $email;
        exit('<div id="alertaConexion" class="alert alert-success" role="alert">Se ha logueado con éxito...</div>');
    }else
        exit('<div id="alertaConexion" class="alert alert-danger" role="alert">Por favor compruebe que los datos ingresados sean correctos!</div>');

}

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
        include ('../php/header.php'); 
    ?>
    </header>
    <main>
    <div id="tituloLogin" class="col text-uppercase text-center">
    <h2>Ingresa los datos de sesión</h2>
</div>
<form action="login.php" method="POST" id="inicioSesion">
    <div class="row mt-3 mb-3">
        <div class="col">
            <input type="email" class="form-control" id="email" placeholder="Email" aria-label="correo" name="email" required>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col">
            <input type="password" class="form-control" id="password" placeholder="password" aria-label="password" name="password" required>
        </div>
    </div>
    <button id="login" type="button" class="btn btn-primary mb-4">Iniciar sesión</button>
</form>
<p id="response"></p>
    </main>
    <footer>
        <?php include ('../views/footer.html');?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").on('click', function(){
                var email = $("#email").val();
                var password = $("#password").val();
                
                if (email =="" || password == "")
                    alert('Por favor ingrese todos los datos');
                    else{
                        $.ajax(
                            {
                                url: 'login.php',
                                method: "POST",
                                data:{
                                    login:1,
                                    emailPHP: email,
                                    passwordPHP: password
                                },
                                success: function (response){
                                    $("#response").html(response);
                                    if (response.indexOf('éxito') >= 0)
                                        window.location='../pages/hidden.php';
                                },
                                dataType: 'text'

                            });
                    }
            });
        });

    </script>
</body>

</html>