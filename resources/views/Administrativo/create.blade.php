@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/administrativo')}}" method="post">
    @csrf
    @include('Administrativo.form',['modo'=>'Crear'])
</form>
</div>
@endsection