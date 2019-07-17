let btnLogin = document.getElementById('btnLogin')

btnLogin.addEventListener('click', function() {
    let identificador = document.getElementById('identificador').value
    let password = document.getElementById('pass').value

    let parametros = {
        method: 'POST',
        identificador: identificador,
        password: password
    }
    $.ajax({
        type: "POST",
        url: "./modulos/php/login/login.php",
        data: parametros,
        success: function(respuesta) {
            if (respuesta == true) {
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