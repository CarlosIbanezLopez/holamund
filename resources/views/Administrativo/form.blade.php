
    <h1>{{$modo}} administrativo</h1>
    @if (count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">

    <label for="CI">CI</label>
    <input type="text" class="form-control" name = "CI" value = "{{ isset($administrativo->CI)?$administrativo->CI:old('CI')}}" id = "CI">


    </div>

    <div class="form-group">

    <label for="Nombres">Nombres</label>
    <input type="text" class="form-control" name = "Nombres" value = "{{ isset($administrativo->Nombres)?$administrativo->Nombres:old('Nombres')}}" id = "Nombres">


    </div>

    <div class="form-group">

    <label for="ApellidoPaterno">Apellido paterno</label>
    <input type="text" class="form-control" name = "ApellidoPaterno" value = "{{ isset($administrativo->ApellidoPaterno)?$administrativo->ApellidoPaterno:old('ApellidoPaterno') }}" id = "ApellidoPaterno">


    </div>

    <div class="form-group">

    <label for="ApellidoMaterno">Apellido materno</label>
    <input type="text" class="form-control" name = "ApellidoMaterno" value = "{{ isset($administrativo->ApellidoMaterno)?$administrativo->ApellidoMaterno:old('ApellidoMaterno')  }}" id = "ApellidoMaterno">


    </div>

    <div class="form-group">

    <label for="Sexo">Sexo</label>
    <input type="text" class="form-control" name = "Sexo" value = "{{ isset($administrativo->Sexo)?$administrativo->Sexo:old('Sexo') }}" id = "Sexo">


    </div>

    <div class="form-group">

    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name = "Telefono" value = "{{ isset($administrativo->Telefono)?$administrativo->Telefono:old('Telefono') }}" id = "Telefono">


    </div>

    <div class="form-group">

    <label for="Email">E-mail</label>
    <input type="text" class="form-control" name = "Email" value = "{{ isset($administrativo->Email)?$administrativo->Email:old('Email')}}" id = "Email">


    </div>

    <div class="form-group">

    <label for="Direccion">Direccion</label>
    <input type="text" class="form-control" name = "Direccion" value = "{{ isset($administrativo->Direccion)?$administrativo->Direccion:old('Direccion') }}" id = "Direccion">
 

    </div>
<br>
    <input class="btn btn-success" type="submit" value = "{{$modo}} datos">

    <a class="btn btn-primary"href="{{ url('administrativo/')}}">Regresar</a>
