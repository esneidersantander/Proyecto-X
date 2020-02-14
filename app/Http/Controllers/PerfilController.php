<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use PDF;
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
		//REGLAS
        $messages = [
            'email.required' => 'Debe ingresar el correo electrónico',  
            'email.unique' => 'El correo electrónico está ligado a otro usuario',
            'telefono.required' => 'Debe ingresar el número telefónico',  
			'telefono.unique' => 'El número telefónico está ligado a otro usuario',
			'nombre.required' => 'El campo nombre es obligatorio de llenar',
			'apellido.required' => 'El campo apellido es obligatorio de llenar',
			'necesidad.required' => 'El campo de si tiene alguna necesidad es obligatorio de llenar',
			'edad.required' => 'El campo de edad es obligatorio de llenar',
			'sexo.required' => 'El campo del sexo es obligatorio de llenar',
        ];
        $rules = [
            'email' => 'required|unique:perfil,email',
			'telefono' => 'required|unique:perfil,telefono',
			'nombre' => 'required',
			'apellido' => 'required',
			'necesidad' => 'required',
			'edad' => 'required',
			'sexo' => 'required',
        ];
        $this->validate($request, $rules, $messages);
		 $per = new Perfil;
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
		return redirect('registrar')->with('creado','La inscripcion ha sido realizada con éxito');
		// 
		//dd($per->estarinformadoboletin);

	}
    public function mostrarInscritos(){
		$inscritos=Perfil::all();
		return view('inscritos',compact('inscritos'));
	}
	public function reporteInscritos(){
		$inscritos=Perfil::all();
		return PDF::loadView('reporteinscritos', ['inscritos'=>$inscritos])->setPaper('a4','landscape')->stream('archivo.pdf');
	}
}
