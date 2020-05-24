$(document).ready(function () {
    $("#registrarUsuario").on('submit', function (e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/registrar",
            data: $("#registrarUsuario").serialize(),
            success: function (reponse) {
                console.log(reponse)
                Swal.fire({
                    icon: 'success',
                    title: 'Usuarios Registrado '+ document.getElementById("Nombres").value,
                    showConfirmButton: false,
                    width: '500px',
                    height: '300',
                    timer: 2000
                });
                $('#registrarUsuario')[0].reset();
            },
            error: function (error) {
                console.log(error)
                alert("Error al Registrar Usuario");
            }
        });

    });
});

/*$(document).ready(function () {
    $("#btnRegistro").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/registrar",
            data: $("#registrarUsuario").serialize(),
            success: function (reponse) {
                console.log(reponse)
                alert("Registrado");

            },
            error: function (error) {
                console.log(error)
                alert("Error al Registrar Usuario");
            }
        });
        });
});
*/
