<div class="row">
    <div>
        @foreach ($preguntas as $pregunta)
        
            <h4>
                <label for="preunta">{{$pregunta->desc_pregunta}}</label>
            </h4>
            
            <div>
            @foreach ($pregunta->respuestas as $respuesta)
                
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline_{{$respuesta->id}}" name="preguntas[{{$pregunta->id}}]" class="custom-control-input" 
                    value="{{$respuesta->correcta}}" 
                    {{ is_null($pregunta->pivot) ? '' : $pregunta->pivot->where('pregunta_id',$pregunta->id)->first()->activo == 1  ? ($respuesta->correcta == 1 ? 'checked' : '') : '' }}>
                    <label class="custom-control-label" for="customRadioInline_{{$respuesta->id}}">{{$respuesta->desc_respuespuesta}}</label>
                </div>
                
                @endforeach
            </div>
            
        @endforeach
        <br>
        <div>
            @php
                $message = $action == 'edit' ? 'Actualizar' : 'Guardar';
            @endphp
            <button class="btn btn-primary" type="submit">{{$message}}</button>
        </div>
    </div>

</div>
