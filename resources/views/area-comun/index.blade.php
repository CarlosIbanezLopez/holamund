@extends('layouts.app')

@section('template_title')
    Area Comun
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Area Comun') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('area-comuns.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Edificio Id</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areaComuns as $areaComun)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $areaComun->edificio_id }}</td>
											<td>{{ $areaComun->nombre }}</td>

                                            <td>
                                                <form action="{{ route('area-comuns.destroy',$areaComun->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('area-comuns.show',$areaComun->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('area-comuns.edit',$areaComun->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $areaComuns->links() !!}
            </div>
        </div>
    </div>
@endsection
