<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['id', 'Identificacion', 'Contrasena', 'Nombres', 'Apellidos'];

    public $timestamps = false;
}
