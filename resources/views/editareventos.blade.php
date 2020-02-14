@auth
@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">

      <form action="{{ route('actualizarevento',[$objetivo->id])}}" method="post">
        @csrf
        <h1 class="display-4">Eventos</h1>
        <hr>
        <div class="form-group">
          <label>Actividad</label>
          <input type="text" class="form-control" name="actividad" value="{{$objetivo->actividad}}" required>
        </div>
        <div class="form-group">
          <label>Descripcion del Evento</label>
          <input type="text" class="form-control" name="descripcion"value="{{$objetivo->descripcion}}" required>
        </div>
        <div class="form-group">
          <label>Día del evento</label>
          <input type="date" class="form-control" name="dia" value="{{$objetivo->dia}}" required>
        </div>
        <div class="form-group">
          <label>Hora</label>
          <input type="time" class="form-control" name="hora" value="{{$objetivo->hora}}" required>
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