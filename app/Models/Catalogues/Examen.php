<?php

namespace App\Models\Catalogues;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $table = 'tblexamenes';

    protected $fillable = [
        'usuario_id',
        'num_preguntas'
        
    ];

    public function preguntas()
    {
        return $this->belongsToMany(Pregunta::class,'tblexamenespreguntas','examen_id','pregunta_id')
        ->withPivot('activo');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'usuario_id');
    }

     // Seccion de Scopes

     public function scopeStatus($query,$status)
     {
         return $query->where('activo', $status);
     }

     public function getFullNameAttribute()
    {
        return "{$this->user->nombre} {$this->user->paterno} {$this->user->materno}";
    }
}
