<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
    public function guardarEvento(Request $request)
    {
        $event = new Evento();
        $event->descripcion = $request->descripcion;
        $event->actividad = $request->actividad;
        $event->dia = $request->dia;
        $event->hora = $request->hora;
        $event->save();
        return redirect()->route('eventos');
    }
    public function indexEvento()
    {
        $eventos=Evento::all();
        return view('eventos',compact('eventos'));
    }
    public function eliminarEvento($id)
    {
        $objetivo=Evento::find($id);
        $objetivo->delete();
        return redirect()->route('eventos');

    }

    public function editarEvento($id){
        $objetivo=Evento::find($id);
        return view('editareventos',compact('objetivo'));
    }
    public function actualizarEvento(Request $request, $id){
        $event=evento::find($id);
        $event->descripcion = $request->descripcion;
        $event->actividad = $request->actividad;
        $event->dia = $request->dia;
        $event->hora = $request->hora;
        $event->save();
        return redirect()->route('eventos');
    }
    
}
