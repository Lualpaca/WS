<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    protected $table = 'file';
    protected $fillable = [id, 'name', 'created_at', 'updated_at'];

    public $timestamps = false;
}
