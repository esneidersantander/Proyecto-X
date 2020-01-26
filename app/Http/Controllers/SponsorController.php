<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;
class SponsorController extends Controller
{
    public function indexSponsor()
    {
        $sponsores=Sponsor::all();
        return view('sponsores',compact('sponsores'));
    }
    public function guardarSponsor(Request $request)
    {
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/sponsores', $name);
        }
        $spon = new Sponsor();
        $spon->imagen = $name;
        $spon->nivel = $request->nivel;
        $spon->sitioweb = $request->sitioweb;
        $spon->save();
        return redirect()->route('sponsores');
    }

    public function eliminarSponsor($id)
    {
        $objetivo=Sponsor::find($id);
        $objetivo->delete();
        return redirect()->route('sponsores');

    }

    public function editarSponsor($id)
    {
        $sponsores=Sponsor::find($id);
        return view('editarsponsores',compact('sponsores'));
    }
    public function actualizarSponsor(Request $request, $id)
    {
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/sponsores', $name);
        }
        $datos = array(
            'imagen'=> $name,
            'nivel'=> $request->nivel,
            'sitioweb' => $request->sitioweb,
        );
        Sponsor::whereId($id)->update($datos);
        return redirect()->route('sponsores');
    }
}
