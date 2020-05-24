<?php

namespace App\Http\Controllers;

use DB;
use File;
use Illuminate\Http\Request;
use Redirect;
use Response;
use Validator;

class FileController extends Controller
{
    public function index()
    {
        return view('inicio');
    }


    public function save(Request $request)
    {
        //dd($request->all());

        request()->validate([
            'file' => 'required|mimes:doc,docx,pdf,txt,png,jpg,jpeg|max:2048',
        ]);


        if ($files = $request->file('file')) {
            $request->file('file')->store('images');
            $name = $files->getClientOriginalName();
            DB::table('files')
                ->insert(['name' => $name,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()]);
        } else {
            return Redirect::to("file")
                ->withSuccess('Problemas al Subir el Archivo');
        }
        //dd($name);
        return Redirect::to("file")
            ->withSuccess('Muy Bien! el Achivo fue publicado en la BD.');

    }
}
