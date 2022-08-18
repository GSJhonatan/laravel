<?php

namespace App\Models\Catalogues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;

    protected $table = 'tblacciones';

    protected $fillable = [
        'activo',
        'desc_accion'
    ];

    
}
