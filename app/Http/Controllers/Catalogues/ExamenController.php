<?php

namespace App\Http\Controllers\Catalogues;

use App\Http\Controllers\Controller;
use App\Models\Catalogues\Examen;
use App\Models\Catalogues\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenes = Examen::with(['preguntas.respuestas','user'])->get();
        // dd($examenes);
        return view('catalogues.examenes.index',[
            'examenes' => $examenes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj = new Examen;
        $preguntas = Pregunta::with(['respuestas'])->inRandomOrder()->take(4)->status(1)->get();
        return view('catalogues.examenes.create',[
                    'obj' => $obj,
                    'preguntas' => $preguntas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        try {
            DB::beginTransaction();

           $preguntas =  $request->preguntas;

           $examen = Examen::create([
            'usuario_id' => Auth::id(),
            'num_preguntas' => count($preguntas)            
           ]); 



           $arreglo_respuestas = [];

           foreach ($preguntas as $pregunta_id => $correcta) {

                $arreglo_respuestas[] = [
                    'pregunta_id' => $pregunta_id,
                    'activo' => $correcta
                ];
            
           }

           $examen->preguntas()->attach($arreglo_respuestas);
             DB::commit();
            return redirect()->route('examen.index')->with('success', 'Registro generado correctamente');
        } catch (\Throwable $th) {
            
            DB::rollBack();
            return back()->withInput()->with('error', 'error al guardar usuario');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $obj = Examen::with(['preguntas.respuestas'])->find($id);
        if ($obj) {
        //    dd($obj);
            return view('catalogues.examenes.edit',[
                        'obj' => $obj,
                        'preguntas' => $obj->preguntas
            ]);
        }else{
            return back()->with('error', 'No encontramos al usuario que esta buscando');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // dd($request);
            try {
                DB::beginTransaction();
    
               $preguntas =  $request->preguntas;
    
               $examen = Examen::find($id);
    
    
               $arreglo_respuestas = [];
    
               foreach ($preguntas as $pregunta_id => $correcta) {
    
                    $arreglo_respuestas[] = [
                        'pregunta_id' => $pregunta_id,
                        'activo' => $correcta
                    ];
                
               }
    
               $examen->preguntas()->sync($arreglo_respuestas);
                 DB::commit();
                return redirect()->route('examen.index')->with('success', 'Registro actualizado correctamente');
            } catch (\Throwable $th) {
                
                DB::rollBack();
                return back()->withInput()->with('error', 'error al actualizar examen');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
