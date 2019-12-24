<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Mentor;
use App\Sponsor;
use App\Organizador;

class ShowController extends Controller
{
    public function mostrarTodo(){
		//$q->where(DB::raw("DATE(created_at) = '".date('Y-m-d')."'"));

		//$events = App\Evento::all();
		
		$eventosdia1 = Evento::all()->where('dia','2019-11-16');
		$eventosdia2 = Evento::all()->where('dia','2019-11-17');
		$eventosdia3 = Evento::all()->where('dia','2019-11-18');
		$mentores= Mentor::all();
		$sponsores= Sponsor::all();
		$organizadores= Organizador::all();
		
		//$eventos->whereDay('$events', '=', '16');
		return view ('welcome', compact( 'eventosdia1','eventosdia2','eventosdia3','mentores','sponsores','organizadores'));
	}
	public function about(){
		return view ('about');
	}
}
