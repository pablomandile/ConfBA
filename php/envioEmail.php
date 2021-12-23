<?php
echo "envio email";
if (isset($_POST['contacto'])){
    $nombre = $_POST['nombrePHP'];
    $apellido = $_POST['apellidoPHP'];
    $asunto = $_POST['asuntoPHP'];
    $correo = $_POST['correoPHP'];
    $comentarios = $_POST['comentariosPHP'];

    //..parametro 1 destinatario, parametro 2 asunto, para metro 3 cuerpo del mensaje, parametro 4 desde donde nos llegan los correos
    $destino= $correo;
    $asunto= $asunto;
    $cuerpo= "Hola ".$nombre.", gracias por ponerte en contacto con nosotros, te responderemos a la brevedad! <br><br>".$comentarios;

    if(mail($destino,$asunto,$cuerpo,'from:info@techtalksba.com.ar')){
        exit('<div id="alertaConexion" class="alert alert-success" role="alert">Se ha enviado con éxito...</div>');
    } else{
        exit('<div id="alertaConexion" class="alert alert-danger" role="alert">Ha ocurrido un error, por favor inténtelo nuevamente...</div>');
    };
}
// $headers .= 'Cc: somebody@domain.com' . "\r\n";
// compose headers
// $headers = "From: webmaster@example.com\r\n";
// $headers .= "Reply-To: webmaster@example.com\r\n";
// $headers .= "X-Mailer: PHP/".phpversion();
?>