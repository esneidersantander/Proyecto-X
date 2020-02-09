<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ShowController@mostrarTodo');
Route::get('/registrar','PerfilController@mostrar')->name('registrar');
Route::post('/registrar/ingresar','PerfilController@guardar');
Route::get('/inscritos','PerfilController@mostrarInscritos')->name('inscritos');
Route::get('/reporteinscritos','PerfilController@reporteInscritos')->name('reporteinscritos');
Route::get('/about', 'ShowController@about')->name('about');


Route::get('/eventos', 'EventoController@indexEvento')->name('eventos')->middleware('auth');
Route::post('/ingresarevento', 'EventoController@guardarEvento')->name('ingresarevento')->middleware('auth');
Route::get('/eliminarevento/{id}', 'EventoController@eliminarEvento')->name('eliminarevento')->middleware('auth');
Route::get('/editarevento/{id}', 'EventoController@editarEvento')->name('editarevento')->middleware('auth');
Route::post('/actualizarevento/{id}', 'EventoController@actualizarEvento')->name('actualizarevento')->middleware('auth');
Route::get('/reporteeventos','EventoController@reporteEvento')->name('reporteeventos')->middleware('auth');



Route::get('/mentores', 'MentorController@indexMentor')->name('mentores')->middleware('auth');
Route::post('/ingresarmentor', 'MentorController@guardarMentor')->name('ingresarmentor')->middleware('auth');
Route::get('/eliminarmentor/{id}', 'MentorController@eliminarMentor')->name('eliminarmentor')->middleware('auth');
Route::get('/editarmentor/{id}', 'MentorController@editarMentor')->name('editarmentor')->middleware('auth');
Route::post('/actualizarmentor/{id}', 'MentorController@actualizarMentor')->name('actualizarmentor')->middleware('auth');
Route::get('/reportementor','MentorController@reporteMentor')->name('reportementor')->middleware('auth');


Route::get('/sponsores', 'SponsorController@indexSponsor')->name('sponsores')->middleware('auth');
Route::post('/ingresarsponsor', 'SponsorController@guardarSponsor')->name('ingresarsponsor')->middleware('auth');
Route::get('/eliminarsponsor/{id}', 'SponsorController@eliminarSponsor')->name('eliminarsponsor')->middleware('auth');
Route::get('/editarsponsor/{id}', 'SponsorController@editarSponsor')->name('editarsponsor')->middleware('auth');
Route::post('/actualizarsponsor/{id}', 'SponsorController@actualizarSponsor')->name('actualizarsponsor')->middleware('auth');



Route::get('/organizadores', 'OrganizadorController@indexOrganizador')->name('organizadores')->middleware('auth');
Route::post('/ingresarorganizador', 'OrganizadorController@guardarOrganizador')->name('ingresarorganizador')->middleware('auth');
Route::get('/eliminarorganizador/{id}', 'OrganizadorController@eliminarOrganizador')->name('eliminarorganizador')->middleware('auth');
Route::get('/editarorganizador/{id}', 'OrganizadorController@editarOrganizador')->name('editarorganizador')->middleware('auth');
Route::post('/actualizarorganizador/{id}', 'OrganizadorController@actualizarOrganizador')->name('actualizarorganizador')->middleware('auth');
Route::get('/reporteorganizador','OrganizadorController@reporteOrganizador')->name('reporteorganizador')->middleware('auth');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
