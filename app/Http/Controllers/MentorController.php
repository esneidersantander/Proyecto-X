<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;

class MentorController extends Controller
{
    public function indexMentor()
    {
        $mentores=Mentor::all();
        return view('mentores',compact('mentores'));
    }
    public function guardarMentor(Request $request)
    {
        if($request->hasFile('foto')){
            $file=$request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/mentores', $name);
        }
        $ment = new Mentor();
        $ment->foto = $name;
        $ment->nombre = $request->nombre;
        $ment->especialidad = $request->especialidad;
        $ment->descripcion = $request->descripcion;
        $ment->facebook = $request->facebook;
        $ment->twitter = $request->twitter;
        $ment->linkedin = $request->linkedin;
        $ment->instagram = $request->instagram;
        $ment->email = $request->email;
        $ment->sitioweb = $request->sitioweb;
        $ment->save();
        return redirect()->route('mentores');
    }

    public function eliminarMentor($id)
    {
        $objetivo=Mentor::find($id);
        $objetivo->delete();
        return redirect()->route('mentores');

    }
}
