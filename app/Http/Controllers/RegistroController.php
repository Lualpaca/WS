<?php
namespace App\Http\Controllers;
use App\Usuarios;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use function Illuminate\Support\Facades\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('Registro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Usuarios.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $v = Validator::make($request->all(), [
            'Identificacion' => ['required', 'numeric'],
            'Contrasena' => ['required', 'numeric'],
            'Nombres' => ['required'],
            'Apellidos' => ['required']
        ]);

        if ($v->fails()) {
            return back()->with('errors', $v->errors());
        }

        $input = $requewest->all();
        $input['Contrasena'] = bcrypt($input['Contrasena']);

        Usuarios::create($input);

            return redirect('nuevo');
    }
    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show()
    {
        $Usuarios = DB::table('usuarios')->orderBy('Nombres')->get();
        //$Usuarios = Usuarios::get();
        //return view('Usuarios.show', compact('Usuarios', $Usuarios));
        //return json_encode($Usuarios);
        //return response()->json([ 'Usuarios' => $Usuarios]);
        return response()->json($Usuarios);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $Usuario = Usuarios::find($id);
        return view('Usuarios.edit', compact('Usuario'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @panpm i laraform --save     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->Identificacion = $request->input('Identificacion');
        $usuario->Nombres = $request->input('Nombres');
        $usuario->Apellidos = $request->input('Apellidos');
        $usuario->Contrasena = $request->input('Contrasena');
        $usuario->save();
        //return redirect()->action('RegistroController@show');
        return redirect('consultar');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //dd($id);
        //$user->delete();
        DB::table('Usuarios')->where('id', $id)->delete();

        //return redirect()->action('RegistroController@show');
        //return redirect('consultar');
        $Usuarios = Usuarios::get();
        return view('Usuarios.show', compact('Usuarios', $Usuarios));
    }
}
