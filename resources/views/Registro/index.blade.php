@extends('layouts.app1')

@section('contect')
    <a href="{{route('consultar')}}">Usuarios</a>
    <!--form id="registrarUsuario" method="post" action="{{route('registrar')}}"-->
    <form id="registrarUsuario">
        @csrf
        <table class="table table-responsive">

            <tr>
                <td><label for="Identificacion">Usuario</label></td>
                <td><input type="text" name="Identificacion" id="Identificacion" autofocus></td>
            </tr>

            <tr>
                <td><label for="Contrasena">Contraseña</label></td>
                <td><input type="password" name="Contrasena" id="Contrasena"></td>
            </tr>

            <tr>
                <td><label for="Nombres">Nombres</label></td>
                <td><input type="text" name="Nombres" id="Nombres"></td>
            </tr>

            <tr>
                <td><label for="Apellidos">Apellidos</label></td>
                <td><input type="text" name="Apellidos" id="Apellidos"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <!--button type="submit" id="btnRegistrar" class="btn btn-success">Registrar</button-->
                    <input type="submit" id="btnRegistro" class="btn btn-dark" value="Registrar">


                </td>
            </tr>

        </table>
    </form>



    <script>
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

            $(":input[name=Identificacion]").focus();
            $(":input[name=Identificacion]").css("background-color", "#cccccc");

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

    </script>

@endsection
