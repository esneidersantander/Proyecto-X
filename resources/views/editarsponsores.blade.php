@auth
@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form action="{{ route('actualizarsponsor',[$sponsores->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="display-4">Sponsores</h1>
                <hr>
                <div class="form-group">
                    <label>Nivel</label>
                    <select name="nivel" class="form-control" required>
                        <option>Seleccione un nivel</option>
                        <option value="gold">GOLD</option>
                        <option value="silver">SILVER</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Sitio Web</label>
                    <input type="text" class="form-control" name="sitioweb"value="{{$sponsores->sitioweb}}" required>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <div class="col-md-8">
                    <img src="{{ URL::to('/') }}/images/sponsores/{{ $sponsores->imagen }}" class="img-thumbnail" width="100" /> 
                    </div>
                    <br>
                    <input type="file" class="form-control" name="imagen">
                    <input type="hidden" name="hidden_image" value="{{ $sponsores->imagen }}" />
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