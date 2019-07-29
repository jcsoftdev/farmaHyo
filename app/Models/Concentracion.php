<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concentracion extends Model
{
    protected $table = 'concentraciones';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];
    // public $timestamps = false;

    protected $hidden = [
        'id'
    ];
}
