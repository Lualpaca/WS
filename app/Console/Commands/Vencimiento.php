<?php

namespace App\Console\Commands;

use App\Mail\sendVencimiento;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Mail;


class Vencimiento extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:vencimiento';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Se acerca la fecha de vencimiento del Activo: ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Mail::to('ingsislualpaca@gmail.com')->send(new sendVencimiento(Carbon::now()));
        //$inicio = $request->input('inicio');  // Notificar 5 dias antes

        $fin = Carbon::now()->addDays(5); //Fecha para consultar en la tabla de activos.

        $dias = Carbon::now()->diffInDays(Carbon::parse($fin));
        Mail::to('ingsislualpaca@gmail.com')->send(new sendVencimiento(Carbon::now(), $dias));
        //Mail::to('ccastillasas@gmail.com')->send(new sendVencimiento(Carbon::now(),$dias));
        if (Carbon::now()->diffInDays(Carbon::parse($fin)) < $dias) { //los dias con 5,
            //dump('Se acerca la fecha de vencimiento del Activo: ' . Carbon::parse($fin));

            //Mail::to('ingsislualpaca@gmail.com')->send(new sendVencimiento($fin));
            //Mail::to('administracion@surgifast.com.co')->send(new sendVencimiento($fin));
            //Mail::to('gestiondocumental@surgifast.com.co')->send(new sendVencimiento($fin));
            //Mail::to('gerencia@saludgestioncalidad.com')->send(new sendVencimiento($fin));
            //Mail::to('gerencia@saludgestioncalidad.com')->send(new sendVencimiento($fin));
        } else {
            $dias = null;
            Mail::to('ingsislualpaca@gmail.com')->send(new sendVencimiento(Carbon::now(), $dias));
        }
    }
}
