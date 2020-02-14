@auth

@extends('layout')

@section('content')
<div class="container">
<div class="row">
        <div class="col-12 col-lg-12">
            <h1 class="display-4 .text-success text-center">Sistema Adm. para Startup Weekend</h1>
        </div> 
</div>
<br>
<div class="row justify-content-center">
            <div class="col-12 col-lg-3">
                <div class="card .text-dark border-success mb-4" style="max-width: 18rem;">
                <div class="card-header text-center">Inscritos</div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$perfil}}</h5>
                    <div class="text-center">
                    <a href="{{ url('reporteinscritos') }}" class="btn border-success " target="_blank">Reporte</a>
                    </div>
                   
                </div>
                </div>
                
            </div>
            <div class="col-12 col-lg-3">
                <div class="card .text-dark border-success mb-4" style="max-width: 18rem;">
                    <div class="card-header text-center ">Eventos</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$eventos}}</h5>
                        <div class="text-center">
                            <a href="{{ url('reporteeventos') }}" class="btn border-success " target="_blank">Reporte</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                        <div class="card .text-dark border-success mb-4" style="max-width: 18rem;">
                                <div class="card-header text-center">Mentores</div>
                                <div class="card-body">
                                        <h5 class="card-title text-center">{{$mentores}}</h5>
                                        <div class="text-center">
                                            <a href="{{ url('reportementor') }}" class="btn border-success " target="_blank">Reporte</a>
                                        </div>
                                </div>
                        </div>
            </div>
</div>

</div>

@endsection
@endauth