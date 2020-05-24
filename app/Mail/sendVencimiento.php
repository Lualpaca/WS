<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendVencimiento extends Mailable
{
    use Queueable, SerializesModels;
    public $fecha, $dias;

    /**
     * Create a new message instance.
     *
     * @param $fecha
     * @param $dias
     */
    public function __construct($fecha, $dias)
    {
        $this->fecha = $fecha;
        $this->dias = $dias;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notificación de Servicio(s)')->view('mails.vencimiento');
    }
}
