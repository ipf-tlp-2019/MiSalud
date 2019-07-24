let btnLogin = document.getElementById('btnLogin')

btnLogin.addEventListener('click', function() {

    let identificador = $('#correo_login').val()
    let password = document.getElementById('password_login').value

    let parametros = {
        method: 'POST',
        correo: identificador,
        password: password
    }
    $.ajax({
        type: "POST",
        url: "./modulos/php/login/login.php",
        data: parametros,
        success: function(respuesta) {
            if (respuesta != false) {
                document.getElementById("alertDanger").style.display = 'none';
                window.location.href = "index.php";


            } else {
                document.getElementById("alertDanger").style.display = 'block';

            }
        },
        beforeSend: function() {

        }
    });

})