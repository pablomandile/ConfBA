<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
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
            <h2>Envíanos un comentario</h2>
    </div>
    <form action="envioEmail.php" method="POST" id="formContacto">
        <div class="row mt-3 mb-3">
            <div class="col" >
                <input type="text" id="grupoNombre" class="form-control" placeholder="Nombre" aria-label="nombre" name="nombre" required>
            </div>
            <div class="col">
                <input type="text" id="grupoApellido" class="form-control" placeholder="Apellido" aria-label="apellido" name="apellido" required>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col">
                <input type="text" class="form-control" id="grupoAsunto" placeholder="asunto" aria-label="asunto" name="asunto" required>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col">
                <input type="email" class="form-control" id="grupoCorreo" placeholder="Email" aria-label="correo" name="correo" required>
            </div>
        </div>
        <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" aria-label="comentarios" name="comentarios"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Dejanos un comentario</label>
        </div>
        <button type="button" id="btnContacto" class="btn btn-primary mb-4">Enviar</button>
    </form>
    <p id="response"></p>
    </main>
    <footer>
        <?php include ('../views/footer.html');?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        const formulario = document.getElementById('formContacto');
        const inputs = document.querySelectorAll('#formContacto input');

        const expresiones = {
            nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
            correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
            comentarios: /[0-9a-zA-Z]{8,}/
        }

        var campos = {
            nombre: false,
            apellido: false,
            asunto: false,
            correo: false,
            comentarios: false
        }

        const validarFormulario = (e) => {
            switch (e.target.name){
                case "nombre":
                    if (expresiones.nombre.test(e.target.value)){
                        document.getElementById('grupoNombre').classList.remove('formulario__input-incorrecto');
                        document.getElementById('grupoNombre').classList.add('formulario__input-correcto');
                        campos.nombre = true;
                    } else {
                        document.getElementById('grupoNombre').classList.add('formulario__input-incorrecto');
                        document.getElementById('grupoNombre').classList.remove('formulario__input-correcto');
                        campos.nombre = false;
                    }
                break;
                case "apellido":
                    if (expresiones.nombre.test(e.target.value)){
                        document.getElementById('grupoApellido').classList.remove('formulario__input-incorrecto');
                        document.getElementById('grupoApellido').classList.add('formulario__input-correcto');
                        campos.apellido = true;
                    } else {
                        document.getElementById('grupoApellido').classList.add('formulario__input-incorrecto');
                        document.getElementById('grupoApellido').classList.remove('formulario__input-correcto');
                        campos.apellido = false;
                    }
                break;
                case "asunto":
                    if (expresiones.comentarios.test(e.target.value)){
                        document.getElementById('grupoAsunto').classList.remove('formulario__input-incorrecto');
                        document.getElementById('grupoAsunto').classList.add('formulario__input-correcto');
                        campos.asunto = true;
                    } else {
                        document.getElementById('grupoAsunto').classList.add('formulario__input-incorrecto');
                        document.getElementById('grupoAsunto').classList.remove('formulario__input-correcto');
                        campos.asunto = false;
                    }
                break;
                case "correo":
                    if (expresiones.correo.test(e.target.value)){
                        document.getElementById('grupoCorreo').classList.remove('formulario__input-incorrecto');
                        document.getElementById('grupoCorreo').classList.add('formulario__input-correcto');
                        campos.correo = true;
                    } else {
                        document.getElementById('grupoCorreo').classList.add('formulario__input-incorrecto');
                        document.getElementById('grupoCorreo').classList.remove('formulario__input-correcto');
                        campos.correo = false;
                    }
                break;

                case "comentarios":
                    if (expresiones.comentarios.test(e.target.value)){
                        document.getElementById('floatingTextarea2').classList.remove('formulario__input-incorrecto');
                        document.getElementById('floatingTextarea2').classList.add('formulario__input-correcto');
                        campos.comentarios = true;
                    } else {
                        document.getElementById('floatingTextarea2').classList.add('formulario__input-incorrecto');
                        document.getElementById('floatingTextarea2').classList.remove('formulario__input-correcto');
                        campos.comentarios = false;
                    }
                break;
            }
        }


    inputs.forEach((input) =>{
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    });

    formulario.addEventListener('button', (e) =>{
        e.preventDefault();
    });

    if (campos.nombre && campos.apellido && campos.asunto && campos.correo && campos.comentarios){
	$(document).ready(function(){
		$("#btnContacto").on('click', function(){
			var nombre = $("#nombre").val();
			var apellido = $("#apellido").val();
            var asunto = $("#asunto").val();
			var correo = $("#correo").val();
			var comentario = $("#comentarios").val();
	console.log(correo);
			$.ajax(
				{
					url: '../php/envioEmail.php',
					method: "POST",
					data:{
						contacto: 1,
						nombrePHP: nombre,
						apellidoPHP: apellido,
                        asuntoPHP: asunto,
						correoPHP: correo,
						comentariosPHP: comentario
                    },
					success: function (response){
						$("#response").html(response);
						if (response.indexOf('éxito') >= 0)
							window.location='../pages/listado.php';
					},
					dataType: 'text'

				});
		});
	});
}
</script>
</body>

</html>