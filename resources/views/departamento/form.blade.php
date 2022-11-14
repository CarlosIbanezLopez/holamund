<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('edificio_id') }}
            {{ Form::text('edificio_id', $departamento->edificio_id, ['class' => 'form-control' . ($errors->has('edificio_id') ? ' is-invalid' : ''), 'placeholder' => 'Edificio Id']) }}
            {!! $errors->first('edificio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_of_departamento') }}
            {{ Form::text('nro_of_departamento', $departamento->nro_of_departamento, ['class' => 'form-control' . ($errors->has('nro_of_departamento') ? ' is-invalid' : ''), 'placeholder' => 'Nro Of Departamento']) }}
            {!! $errors->first('nro_of_departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_of_habitaciones') }}
            {{ Form::text('nro_of_habitaciones', $departamento->nro_of_habitaciones, ['class' => 'form-control' . ($errors->has('nro_of_habitaciones') ? ' is-invalid' : ''), 'placeholder' => 'Nro Of Habitaciones']) }}
            {!! $errors->first('nro_of_habitaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piso') }}
            {{ Form::text('piso', $departamento->piso, ['class' => 'form-control' . ($errors->has('piso') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('piso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>