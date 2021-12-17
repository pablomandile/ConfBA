$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


 const cantidadEntradas = document.getElementById('cantidadEntrada')


 const botonCalcular = document.getElementById('botonCalcular')

 const categoria = document.getElementById('inputState')

 const  totalCompra =document.getElementById('totalCompra')

// botonCalcular.addEventListener('click',resumen)





function resumen(){
  

  console.log(categoria.value)

  console.log(cantidadEntradas.value)

  cantidadEntradas.value

  if(categoria.value =="trainee"){
    alert("esto es un trainee")
  }else{
    alert("esto no es un trainee")
  }

  //totalCompra.style.display="block"

  totalCompra.innerHTML=  cantidadEntradas.value

  

}





