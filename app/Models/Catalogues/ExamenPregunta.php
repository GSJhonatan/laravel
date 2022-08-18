<?php

namespace App\Models\Catalogues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenPregunta extends Model
{
    use HasFactory;

    protected $table = 'tblexamenespreguntas';

    protected $fillable = [
        'examen_id',
        'pregunta_id',
        'activo'
        
        
    ];



}
