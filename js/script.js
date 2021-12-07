const valorEntradas = 200;
var nombre = document.getElementById('nombre');
var apellido = document.getElementById('apellido');
var correo = document.getElementById('correo');
var items = document.getElementById('categoria');
var botonResumen = document.getElementById('btnResumen');
var cantidad = document.getElementById('cantidad');
var categoria = document.getElementById('categoria');
var total = document.getElementById("total");

botonResumen.addEventListener('click', calculoDescuento);

function calculoDescuento(){
    var totalParcial = valorEntradas * cantidad.value;
    var desc = 0;
    var totalAPagar = 0;
    switch (parseInt(categoria.value)){
        case 1:
            desc = 80;
        break;
        case 2:
            desc = 50;
        break;
        case 3:
            desc = 15;
        break;
        default:
            desc = 0;
        break;
    };
    console.log(desc);
    totalAPagar = totalParcial - ((totalParcial * desc) / 100);
    total.value = 'Total a pagar: $' + totalAPagar;
    console.log(nombre.value);
    console.log(apellido.value);
    console.log(cantidad.value);
    console.log(categoria.value);
    console.log(totalAPagar);
}

//hacer que las tarjetas de descuento interactúen con el form
var tarjetas = document.querySelectorAll('div.card-body');
tarjetas.forEach((element) => {
    element.addEventListener('click', e => {
        switch (element.id){
            case 'tarjeta1':
                tarjetas[1].style.backgroundColor = 'white';
                tarjetas[2].style.backgroundColor = 'white';
                categoria.value = 1;
                element.style.backgroundColor = 'rgb(179, 230, 255)';
            break;
            case 'tarjeta2':
                tarjetas[0].style.backgroundColor = 'white';
                tarjetas[2].style.backgroundColor = 'white';
                categoria.value = 2;
                element.style.backgroundColor = 'rgb(153, 255, 204)';
            break;
            case 'tarjeta3':
                tarjetas[0].style.backgroundColor = 'white';
                tarjetas[1].style.backgroundColor = 'white';
                categoria.value = 3;
                element.style.backgroundColor = 'rgb(255, 255, 204)';
            break;
            default:
                
            break;
        };
      });
});

categoria.addEventListener('click', e =>{
    //console.log(e.target.value);
    switch (e.target.value){
        case '1':
            tarjetas[1].style.backgroundColor = 'white';
            tarjetas[2].style.backgroundColor = 'white';
            tarjetas[0].style.backgroundColor = 'rgb(179, 230, 255)';
        break;
        case '2':
            tarjetas[0].style.backgroundColor = 'white';
            tarjetas[2].style.backgroundColor = 'white';
            tarjetas[1].style.backgroundColor = 'rgb(153, 255, 204)';
        break;
        case '3':
            tarjetas[0].style.backgroundColor = 'white';
            tarjetas[1].style.backgroundColor = 'white';
            tarjetas[2].style.backgroundColor = 'rgb(255, 255, 204)';
        break;
        default:
        break;
    };
});

// link logo

document.getElementById("linkHome").onclick = function () {
    location.href = "ConfBSAS.html";
}