//validacion Login administrador
$(document).ready(function() {
    $('#envia').click(function() {

        var user = document.getElementById('user').value;
        var pass = document.getElementById('password').value;
        var camposvacios = '<div class="alert alert-info">' +
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
            '<span class="glyphicon glyphicon-info-sign"></span>' +
            '<p>Existen campos vacios. Intentalo de nuevo</p>' +
            '</div>';
        var noexiste = '<div class="alert alert-danger">' +
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
            '<span class="glyphicon glyphicon-warning-sign"></span>' +
            '<p>El usuario no se ha encontrado, verifique su cuenta.</p>' +
            '</div>';

        if (user != '' && pass != '') {
            $.ajax({
                url: '../controlador/logeo.php',
                method: 'POST',
                data: {
                    user: user,
                    password: pass
                },
                success: function(msg) {
                    if (msg == '1') {
                        //  $('#msj').html('El usuario no se ha encontrado, verifique su cuenta.');
                        var m_usuario = noexiste;
                        $('#msj').append(m_usuario);
                    } else {
                        window.location = msg;
                    }
                }
            });
        } else {
            var cv = camposvacios;
            // $('#msj').html('Existen campos vacios. Intentalo de nuevo');
            $('#msj').append(cv);
        }
    });
});


//Registro de cliente
$(document).ready(function() {
    $('#registrar').click(function() {
        var usuario = $('#usuario').val();
        var email = $('#email').val();
        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();

        var camposvacios = '<div class="alert alert-info">' +
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
            '<span class="glyphicon glyphicon-info-sign"></span>' +
            '<p>Existen campos vacios. Intentalo de nuevo</p>' +
            '</div>';
        var existe = '<div class="alert alert-danger">' +
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
            '<span class="glyphicon glyphicon-warning-sign"></span>' +
            '<p>El usuario ingresado ya existe.</p>' +
            '</div>';

        var claves = '<div class="alert alert-danger">' +
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
            '<span class="glyphicon glyphicon-warning-sign"></span>' +

            '<p>Las claves ingresados no coinciden.</p>' +
            '</div>';

        if (usuario != '' && email != '' && pass1 != '' && pass2 != '') {
            $.ajax({
                url: '../controlador/registro.php',
                method: 'POST',
                data: {
                    usuario: usuario,
                    email: email,
                    pass1: pass1,
                    pass2: pass2
                },
                success: function(msg) {
                    if (msg == '1') {
                        //$('#msj2').html('El usuario ingresado ya existe.');
                        var warning = existe;
                        $('#msj2').append(warning);
                    } else if (msg == '2') {
                        //$('#msj2').html('Las claves ingresados no coinciden.');
                        var alert = claves;
                        $('#msj2').append(alert);

                    } else {
                        window.location = msg;
                    }
                }
            });
        } else {
            //$('#msj2').html('Se detectaron campos vacios.');
        var campos= camposvacios;
        $('#msj2').append(campos);
        }
    });
});
