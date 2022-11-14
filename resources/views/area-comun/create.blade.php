@extends('layouts.app')

@section('template_title')
    Create Area Comun
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Area Comun</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('area-comuns.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('area-comun.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
