<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizador;
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
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/organizadores', $name);
        }
        
        $datos = array(
            'imagen'=> $name,
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
}
