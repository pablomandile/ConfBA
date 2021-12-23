const formulario = document.getElementById('datosorador');
const inputs = document.querySelectorAll('#datosorador input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{8,12}$/, // 8 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	empresa: /^[a-zA-Z0-9\_\-]{4,16}$/ // Letras, numeros, guion y guion_bajo
}

var campos = {
	nombre: false,
	apellido: false,
	correo: false,
	telefono: false,
	empresa: false,
	vip1: false,
	vip2: false
}

const validarFormulario = (e) => {
	switch (e.target.name){
		case "nombre":
			if (expresiones.nombre.test(e.target.value)){
				document.getElementById('grupoNombre').classList.remove('formulario__input-incorrecto');
				document.getElementSById('grupoNombre').classList.add('formulario__input-correcto');
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
		case "telefono":
			if (expresiones.telefono.test(e.target.value)){
				document.getElementById('grupoTelefono').classList.remove('formulario__input-incorrecto');
				document.getElementById('grupoTelefono').classList.add('formulario__input-correcto');
				campos.telefono = true;
			} else {
				document.getElementById('grupoTelefono').classList.add('formulario__input-incorrecto');
				document.getElementById('grupoTelefono').classList.remove('formulario__input-correcto');
				campos.telefono = false;
			}
		break;
		case "empresa":
			if (expresiones.empresa.test(e.target.value)){
				document.getElementById('grupoEmpresa').classList.remove('formulario__input-incorrecto');
				document.getElementById('grupoEmpresa').classList.add('formulario__input-correcto');
				campos.empresa = true;
			} else {
				document.getElementById('grupoEmpresa').classList.add('formulario__input-incorrecto');
				document.getElementById('grupoEmpresa').classList.remove('formulario__input-correcto');
				campos.empresa = false;
			}
		break;
		case "vip1":
			if (expresiones.nombre.test(e.target.value)){
				document.getElementById('grupoVip1').classList.remove('formulario__input-incorrecto');
				document.getElementById('grupoVip1').classList.add('formulario__input-correcto');
				campos.vip1 = true;
			} else {
				document.getElementById('grupoVip1').classList.add('formulario__input-incorrecto');
				document.getElementById('grupoVip1').classList.remove('formulario__input-correcto');
				campos.vip1 = false;
			}
		break;
		case "vip2":
			if (expresiones.nombre.test(e.target.value)){
				document.getElementById('grupoVip2').classList.remove('formulario__input-incorrecto');
				document.getElementById('grupoVip2').classList.add('formulario__input-correcto');
				campos.vip2 = true;
			} else {
				document.getElementById('grupoVip2').classList.add('formulario__input-incorrecto');
				document.getElementById('grupoVip2').classList.remove('formulario__input-correcto');
				campos.vip2 = false;
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

var tipoSponsor = document.getElementById('inlineRadioOptions');
var comentarios = document.getElementById('comentarios');

if (campos.nombre && campos.apellido && campos.correo && campos.telefono && campos.empresa && campos.vip1 && campos.vip2){
	$(document).ready(function(){
		$("#btnOrador").on('click', function(){
			var nombre = $("#nombre").val();
			var apellido = $("#apellido").val();
			var correo = $("#correo").val();
			var telefono = $("#telefono").val();
			var empresa = $("#empresa").val();
			var vip1 = $("#vip1").val();
			var vip2 = $("#vip2").val();
			$.ajax(
				{
					url: '../php/insertar.php',
					method: "POST",
					data:{
						login:1,
						nombrePHP: nombre,
						apellidoPHP: apellido,
						correoPHP: correo,
						telefonoPHP: telefono,
						empresaPHP: empresa,
						vip1PHP: vip1,
						vip2PHP: vip2,
						tipoSponsorPHP: tipoSponsor,
						comentariosPHP: comentarios
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
} else {
	
}
