@auth
@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{ route('actualizarmentor',[$mentores->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="display-4">Mentores</h1>
                <hr>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre"value="{{$mentores->nombre}}" required>
                </div>
                <div class="form-group">
                    <label>Especialidad</label>
                    <input type="text" class="form-control" name="especialidad"value="{{$mentores->especialidad}}">
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descripcion"value="{{$mentores->descripcion}}">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook"value="{{$mentores->facebook}}">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter"value="{{$mentores->twitter}}">
                </div>
                <div class="form-group">
                    <label>linkedin</label>
                            <input type="text" class="form-control" name="linkedin"value="{{$mentores->linkedin}}">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram"value="{{$mentores->instagram}}">
                </div>
                <div class="form-group">
                    <label>Sitio Web</label>
                            <input type="text" class="form-control" name="sitioweb"value="{{$mentores->sitioweb}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                            <input type="email" class="form-control" name="email"value="{{$mentores->email}}" required>
                </div>
                <div class="form-group">
                <label>Foto</label>
                <div class="col-md-8">
                    <img src="{{ URL::to('/') }}/images/mentores/{{ $mentores->foto }}" class="img-thumbnail" width="100" /> 
                </div>
                <br>
                <input type="file" class="form-control" name="foto">
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Actualizar">
            </form>
        </div>
    </div>
    <hr>
</div>

@endsection
@endauth