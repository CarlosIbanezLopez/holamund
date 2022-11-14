@extends('layouts.app')

@section('template_title')
    {{ $areaComun->name ?? 'Show Area Comun' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Area Comun</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('area-comuns.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Edificio Id:</strong>
                            {{ $areaComun->edificio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $areaComun->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
