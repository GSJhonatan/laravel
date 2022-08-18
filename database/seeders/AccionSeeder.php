<?php

namespace Database\Seeders;

use App\Models\Catalogues\Accion;
use Illuminate\Database\Seeder;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accion::create([
            'activo' => 1,
            'desc_accion' => 'Creación'
        ]);
        Accion::create([
            'activo' => 1,
            'desc_accion' => 'Modificación'
        ]);

    }
}
