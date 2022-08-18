<?php

namespace App\Models\Catalogues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $table = 'tblrespuestas';

    protected $fillable = [
        'pregunta_id',
        'desc_respuespuesta',
        'correcta',
        'activo'
    ];
   
}
