<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class perfilController extends Controller
{
    public function mostrar()
	{
		return view('registrar');
	}
	// public function guardar(Request $request){
	//     if($request->ajax()){
	// 	    $nivel = new Nivel();
		    
	// 	    $nivel->descripcion = $request->descripcion;
		   

	// 	    $nivel->save();
	// 	    //dd($nivel->descripcion);
		    
	// 	    //return view('adminlte::nivel_ingreso');
	// 	    return response()->json(['mensaje'=> 'Datos Correctos']);
	// 	}
	    
	// }

	public function guardar(Request $request){
		 $per = new App\Perfil();
		 $per->email=$request->email;
		 $per->nombre=$request->nombre;
		 $per->apellido=$request->apellido;
		 $per->telefono=$request->telefono;
		 $per->tipo=$request->tipo;
		 $per->niveleducacion=$request->niveleducacion;
		 $per->necesidad=$request->necesidad;
		 $per->edad=$request->edad;
		 $per->sexo=$request->sexo;
		 $per->tallacamisa=$request->tallacamisa;
		 $per->decidisteparticipar=$request->decidisteparticipar;
		 $per->estarinformadocomunidad=$request->estarinformadocomunidad;
		 $per->estarinformadoboletin=$request->estarinformadoboletin;
		 $per->save();
		return redirect('registrar');
		// 
		//dd($per->estarinformadoboletin);

	}

	

}
