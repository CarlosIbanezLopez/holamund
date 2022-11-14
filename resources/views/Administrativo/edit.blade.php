@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/administrativo/'.$administrativo->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}

    @include('Administrativo.form',['modo'=>'Editar'])
</form>
</div>
@endsection 