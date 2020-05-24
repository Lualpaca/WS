<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class test extends Controller
{
    public function calcular(Request $request)
    {
        //date_default_timezone_get();
        //$data=$request->input('inicio');


        $hoy = Carbon::now()->setTimezone('America/Bogota');

        //Parsing Date a String
        $formato = $hoy->toFormattedDateString();
        $completo = array(['Cadena' => $formato]);

        $hora = $hoy->setTimezone('America/Bogota')->toTimeString();
        $completo = Arr::add($completo, 'Hoy', $hoy);

        $largo = $hoy->toDateTimeString();
        $completo = Arr::add($completo, 'Completo', $largo);

        $masAnio = $hoy->addYear();
        $completo = Arr::add($completo, 'Un Año', $masAnio);

        return $completo;
    }

    public function sumarFecha(Request $request)
    {
        $inicio = $request->input('inicio');  // Notificar 5 dias antes
        $fin = $request->input('fin');

        if (Carbon::now()->diffInDays(Carbon::parse($fin)) < 5) { //los dias con 5,
            dump('Se acerca la fecha de vencimiento del Activo: ' . Carbon::parse($fin));
        } else {
            dd(Carbon::now());
        }
    }
}
