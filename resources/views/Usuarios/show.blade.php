header('content-type: application/json; charset=utf-8');
@extends('layouts.app1')

@section('contect')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <a href="{{url('/nuevo')}}">Registrar</a>

    <table class="table table-responsive align-content-center">
        <thead>
        <tr>
            <th scope="col">NIS</th>
            <th scope="col">Identificacióon</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col" colspan="2">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Usuarios as $Usuarios)
            <tr>
                <td>{{$Usuarios->id}}</td>
                <td>{{$Usuarios->Identificacion}}</td>
                <td>{{$Usuarios->Nombres}}</td>
                <td>{{$Usuarios->Apellidos}}</td>

                <td>
                    <!--button class="delete_user" data-id="{{$Usuarios->id}}"><span class="material-icons">delete_forever</span></button-->
                    <i class="delete_user fas fa-recycle" data-id="{{$Usuarios->id}}" title="Eliminar"></i>
                </td>

                <td><a href="{{ URL('editar/'.$Usuarios->id) }}"><input type="button" class="btn-success" value="Editar"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click','.delete_user',function(){
        var id = $(this).attr('data-id');

        Swal.fire({
            title: "Eliminar Usuario",
            text: "Desea elminar el Usuario: "+id,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then(function (e) {
            if(e.value===true){
                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax({
                        type: 'delete',
                        url: "eliminar/"+id,
                        data: {
                        _token: token,
                        _method: 'delete',
                        id: id,
                    },
                    success: function (response) {
                        if(response.success===true){
                            Swal.fire({
                                icon: 'success',
                                title: 'Usuario Eliminado: '+ id,
                                showConfirmButton: false,
                                width: '500px',
                                height: '300',
                                timer: 8000
                            });
                        }
                        location.reload();
                        Swal.fire(
                            'Eliminado!',
                            'Usuario Eliminado',
                            'success'
                        )
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Error al Eliminar Usuario: '+ id,
                            showConfirmButton: false,
                            width: '500px',
                            height: '300',
                            timer: 2000
                        });
                    }
                });

            }
        })
    });
</script>
@endsection
