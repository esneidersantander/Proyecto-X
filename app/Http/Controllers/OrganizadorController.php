<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizador;
use PDF;

class OrganizadorController extends Controller
{
    public function indexOrganizador()
    {
        $organizadores=Organizador::all();
        return view('organizadores',compact('organizadores'));
    }
    public function guardarOrganizador(Request $request)
    {
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/organizadores', $name);
        }
        $orga = new Organizador();
        $orga->imagen = $name;
        $orga->nombre = $request->nombre;
        $orga->apellido = $request->apellido;
        $orga->facebook = $request->facebook;
        $orga->twitter = $request->twitter;
        $orga->linkedin = $request->linkedin;
        $orga->instagram = $request->instagram;
        $orga->email = $request->email;
        $orga->sitioweb = $request->sitioweb;
        $orga->save();
        return redirect()->route('organizadores');
    }

    public function eliminarOrganizador($id)
    {
        $objetivo=Organizador::find($id);
        $objetivo->delete();
        return redirect()->route('organizadores');

    }
    public function editarOrganizador($id)
    {
        $organizadores=Organizador::find($id);
        return view('editarorganizador',compact('organizadores'));
    }
    public function actualizarOrganizador(Request $request, $id){
        
        $imagen_name=$request->hidden_imagen;
        $imagen=$request->file('imagen');
        if($imagen!=''){
            $request->validate([
                'nombre' =>'required',
                'apellido' =>'required',
                'email'=>'required',
                'imagen'=>'required'
            ]);
            $imagen_name=time().$imagen->getClientOriginalName();
            $imagen->move(public_path().'/images/organizadores',  $imagen_name);
        }else{
            $request->validate([
                'nombre' =>'required',
                'apellido' =>'required',
                'email'=>'required',
                'imagen'=>'required'
            ]);

        }
        $datos = array(
            'imagen'=> $imagen_name,
           'nombre' => $request->nombre,
           'apellido' => $request->apellido,
           'facebook' => $request->facebook,
           'twitter' => $request->twitter,
           'linkedin' => $request->linkedin,
           'instagram' => $request->instagram,
           'email' => $request->email,
           'sitioweb' => $request->sitioweb,
        );
        
        Organizador::whereId($id)->update($datos);
        return redirect()->route('organizadores');
    }
    public function reporteOrganizador(){
      $organizador=Organizador::all();
      return PDF::loadView('reporteorganizadores', ['organizador'=>$organizador])->stream('archivo.pdf');
    }
}
