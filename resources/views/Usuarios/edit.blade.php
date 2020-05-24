<a href="{{route('consultar')}}">Usuarios</a>

<form method="post" action="{{ URL('actualizar/'.$Usuario->id )}}">
    @csrf
    @if(isset($Usuario))
        <table class="table">
            <tr>
                <td><label for="Identificacion">NIS</label></td>
                <td>
                    <input type="text" name="id" id="id" value="{{ $Usuario->id }}" readonly="">
                    <input type="hidden" name="Contrasena" id="Contrasena" value="{{$Usuario->Contrasena}}">
                </td>
            </tr>
            <tr>
                <td><label for="Identificacion">Usuario</label></td>
                <td><input type="text" name="Identificacion" id="Identificacion" value="{{ $Usuario->Identificacion }}">
                </td>
            </tr>

            <tr>
                <td><label for="Nombres">Nombres</label></td>
                <td><input type="text" name="Nombres" id="Nombres" value="{{ $Usuario->Nombres }}"></td>
            </tr>

            <tr>
                <td><label for="Apellidos">Apellidos</label></td>
                <td><input type="text" name="Apellidos" id="Apellidos" value="{{ $Usuario->Apellidos }}"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit">Actualizar</button>
                </td>
            </tr>

        </table>
    @endif
</form>
