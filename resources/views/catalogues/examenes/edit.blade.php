@extends('layouts.app')

@section('content')
<div class="container">


    <form method="POST" action="{{ route('examen.update',$obj->id) }}">
        @method('PUT')
        @csrf
        @include('catalogues.examenes.form',['obj' => $obj, 'action'=> 'edit'])
        
    </form>
</div>
@endsection
