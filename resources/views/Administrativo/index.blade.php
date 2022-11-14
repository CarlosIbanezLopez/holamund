@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
    <strong>{{ Session::get('mensaje') }}</strong>
    
</div>
@endif


<a href="{{ url('administrativo/create')}}" class="btn btn-success">registrar Administrativo</a>
<br>
<br>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>CI</th>
            <th>NOMBRES</th>
            <th>APELLIDO PATERNO</th>
            <th>APELLIDO MATERNO</th>
            <th>SEXO</th>
            <th>TELEFONO</th>
            <th>E-MAIL</th>
            <th>DIRECCION</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($administrativos as $administrativo)
            
        
        <tr>
            <td>{{ $administrativo->id }}</td>
            <td>{{ $administrativo->CI }}</td>
            <td>{{$administrativo->Nombres}}</td>
            <td>{{$administrativo->ApellidoPaterno}}</td>
            <td>{{$administrativo->ApellidoMaterno}}</td>
            <td>{{$administrativo->Sexo}}</td>
            <td>{{$administrativo->Telefono}}</td>
            <td>{{$administrativo->Email}}</td>
            <td>{{$administrativo->Direccion}}</td>
            <td> <a href="{{ url('/administrativo/'.$administrativo->id.'/edit') }}">
                <input class="btn btn-warning"type="submit" value="Editar"></form>
            </a> 
                <form action="{{ url('/administrativo/'.$administrativo->id) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE')   }}
                <input class="btn btn-danger"type="submit" onclick="return confirm('¿Seguro que quieres borrar los datos?')" 
                value="Borrar"></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection