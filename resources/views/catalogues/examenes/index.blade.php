@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a class="btn btn-primary" href="{{route('examen.create')}}" role="button">{{__('Registrar Examen')}}</a>
    </div>

    <br>
    <div class="row">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">{{__('id')}}</th>
                <th scope="col">{{__('usuario')}}</th>
                <th scope="col">{{__('# preguntas')}}</th>
                <th scope="col">{{__('Preguntas')}}</th>
                {{-- <th scope="col">{{__('Respuesta Correcta')}}</th> --}}
              </tr>
            </thead>
            <tbody>
                @forelse ($examenes as $item)
                <tr>
                    <td><a class="btn btn-info" href="{{route('examen.edit',$item->id)}}" role="button">Editar</a></td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->full_name}}</td>
                    <td>{{$item->num_preguntas}}</td>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Pregunta</th>
                                <th scope="col">Respuestas</th>
                                <th scope="col">Respuesta Correcta</th>
                                <th scope="col">¿Acertó?</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($item->preguntas as $preg)
                                <tr>
                                    
                                    <th scope="row">{{$preg->id}}</th>
                                    <td>{{$preg->desc_pregunta}}</td>
                                    <td>{{$preg->respuestas->pluck('desc_respuespuesta')->implode(' ,')}}</td>
                                    <td>{{$preg->respuestas->where('correcta',1)->first()->desc_respuespuesta}}</td>
                                    <td>{{$preg->pivot->where('pregunta_id',$preg->id)->where('examen_id',$item->id)->first()->activo == 0 ? 'No' : 'Si'}}</td>
                                  </tr>
                                @endforeach
                              
                            </tbody>
                          </table>

                    </td>
                    {{-- <td>{{$item->id}}</td> --}}
                </tr> 
                @empty
                <tr >
                <td colspan="5">{{__('Sin Registros')}}</td>    
                </tr>
                @endforelse
             
            </tbody>
          </table>
    </div>
</div>
@endsection
