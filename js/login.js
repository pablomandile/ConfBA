$(document).ready(function (){
    $("#login").on('click', function (){
        var email = $("#email").val();
        var password = $("#password").val();
        console.log(email);

        if (email =="" || password == "")
            alert('Por favor ingrese todos los datos');
            else{
                // $.ajax(
                //     {
                //         url: 'login.php',
                //         method: 'POST',
                //         data:{
                //             login:1,
                //             emailPHP: email,
                //             passwordPHP: password
                //         },
                //         success: function (response){
                //             console.log(response);
                //         },
                //         dataType: 'text'
                //     });
            }
    });
});