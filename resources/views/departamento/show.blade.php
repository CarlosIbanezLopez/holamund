@extends('layouts.app')

@section('template_title')
    {{ $departamento->name ?? 'Show Departamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Edificio Id:</strong>
                            {{ $departamento->edificio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Of Departamento:</strong>
                            {{ $departamento->nro_of_departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Of Habitaciones:</strong>
                            {{ $departamento->nro_of_habitaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $departamento->piso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
