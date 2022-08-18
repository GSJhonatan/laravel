<?php

namespace App\Models\Catalogues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $table = 'tblpreguntas';

    protected $fillable = [
        'desc_pregunta',
        'activo'
    ];

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class,'pregunta_id');
    }


    // Seccion de Scopes

    public function scopeStatus($query,$status)
    {
        return $query->where('activo', $status);
    }
 


}
