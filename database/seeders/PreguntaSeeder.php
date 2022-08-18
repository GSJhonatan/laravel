<?php

namespace Database\Seeders;

use App\Models\Catalogues\Pregunta;
use App\Models\Catalogues\Respuesta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pregunta_1 =  Pregunta::create([
                        'activo' => 1,
                        'desc_pregunta' => 'Preunta 1'
                        ]);

        $pregunta_2 =   Pregunta::create([
                            'activo' => 1,
                            'desc_pregunta' => 'Preunta 2'
                        ]);
                        
        $pregunta_3 =   Pregunta::create([
                            'activo' => 1,
                            'desc_pregunta' => 'Preunta 3'
                        ]);
        
        $pregunta_4 =   Pregunta::create([
                            'activo' => 1,
                            'desc_pregunta' => 'Preunta 4'
                        ]);
        
        $pregunta_5 =    Pregunta::create([
                            'activo' => 1,
                            'desc_pregunta' => 'Preunta 5'
                        ]);
        
        $pregunta_6 =    Pregunta::create([
                            'activo' => 1,
                            'desc_pregunta' => 'Preunta 6'
                        ]);
                        
        $pregunta_7 =    Pregunta::create([
                            'activo' => 1,
                            'desc_pregunta' => 'Preunta 7'
                        ]);

        // RESPUESTAS DE LA PREGUNTA 1
        Respuesta::create([
            'pregunta_id' => $pregunta_1->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_1->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_1->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_1->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 1,
            'activo'   => 1
        ]);


        // RESPUESTAS DE LA PREGUNTA 2
        Respuesta::create([
            'pregunta_id' => $pregunta_2->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 1,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_2->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_2->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_2->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 0,
            'activo'   => 1
        ]);


        // RESPUESTAS DE LA PREGUNTA 3
        Respuesta::create([
            'pregunta_id' => $pregunta_3->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_3->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 1,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_3->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_3->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 0,
            'activo'   => 1
        ]);


        // RESPUESTAS DE LA PREGUNTA 4
        Respuesta::create([
            'pregunta_id' => $pregunta_4->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_4->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_4->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 1,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_4->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 0,
            'activo'   => 1
        ]);


        // RESPUESTAS DE LA PREGUNTA 5
        Respuesta::create([
            'pregunta_id' => $pregunta_5->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_5->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_5->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_5->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 1,
            'activo'   => 1
        ]);


        // RESPUESTAS DE LA PREGUNTA 6
        Respuesta::create([
            'pregunta_id' => $pregunta_6->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_6->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 1,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_6->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_6->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 0,
            'activo'   => 1
        ]);


        // RESPUESTAS DE LA PREGUNTA 7
        Respuesta::create([
            'pregunta_id' => $pregunta_7->id,
            'desc_respuespuesta' => 'Respuesta 1',
            'correcta' => 1,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_7->id,
            'desc_respuespuesta' => 'Respuesta 2',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_7->id,
            'desc_respuespuesta' => 'Respuesta 3',
            'correcta' => 0,
            'activo'   => 1
        ]);
        Respuesta::create([
            'pregunta_id' => $pregunta_7->id,
            'desc_respuespuesta' => 'Respuesta 4',
            'correcta' => 0,
            'activo'   => 1
        ]);

    }
}
