@auth
@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{ route('actualizarorganizador',[$organizadores->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="display-4">Organizadores</h1>
                <hr>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre"value="{{$organizadores->nombre}}" required>
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido"value="{{$organizadores->apellido}}" required>
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook"value="{{$organizadores->facebook}}">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter"value="{{$organizadores->twitter}}">
                </div>
                <div class="form-group">
                    <label>linkedin</label>
                    <input type="text" class="form-control" name="linkedin"value="{{$organizadores->linkedin}}">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="instagram"value="{{$organizadores->instagram}}">
                </div>
                <div class="form-group">
                    <label>Sitio Web</label>
                    <input type="text" class="form-control" name="sitioweb"value="{{$organizadores->sitioweb}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"value="{{$organizadores->email}}" required>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <div class="col-md-8">
                    <img src="{{ URL::to('/') }}/images/organizadores/{{ $organizadores->imagen }}" class="img-thumbnail" width="100" /> 
                    </div>
                    <input type="file" class="form-control" name="imagen">
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