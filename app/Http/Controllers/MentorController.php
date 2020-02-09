<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;
use PDF;

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
    public function editarMentor($id)
    {
        $mentores=Mentor::find($id);
        return view('editarmentores',compact('mentores'));
    }
    public function actualizarMentor(Request $request, $id){
        if($request->hasFile('foto')){
            $file=$request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/mentores', $name);
        }
        
        $datos = array(
            'foto'=> $name,
           'nombre' => $request->nombre,
           'especialidad' => $request->especialidad,
           'descripcion' => $request->descripcion,
           'facebook' => $request->facebook,
           'twitter' => $request->twitter,
           'linkedin' => $request->linkedin,
           'instagram' => $request->instagram,
           'email' => $request->email,
           'sitioweb' => $request->sitioweb,
        );
        
        Mentor::whereId($id)->update($datos);
        return redirect()->route('mentores');
    }
    public function reporteMentor(){
        $mentor=Mentor::all();
        return PDF::loadView('reportementores', ['mentor'=>$mentor])->stream('archivo.pdf');
    }
    
}
