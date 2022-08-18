@extends('layouts.app')

@section('content')
<div class="container">


    <form method="POST" action="{{ route('examen.store') }}">
        @csrf
        @include('catalogues.examenes.form',['obj' => $obj,'action'=> 'create'])
        
    </form>
</div>
@endsection
