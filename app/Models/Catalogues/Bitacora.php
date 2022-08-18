<?php

namespace App\Models\Catalogues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $table = 'tblbitacoras';

    protected $fillable = [
        'usuario_id',
        'accion_id',
        'observaciones'
        
    ];

}
