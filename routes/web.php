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


Route::get('/eventos', 'EventoController@indexEvento')->name('eventos');
Route::post('/ingresarevento', 'EventoController@guardarEvento')->name('ingresarevento');
Route::get('/eliminarevento/{id}', 'EventoController@eliminarEvento')->name('eliminarevento');
Route::get('/editarevento/{id}', 'EventoController@editarEvento')->name('editarevento');
Route::post('/actualizarevento/{id}', 'EventoController@actualizarEvento')->name('actualizarevento');

Route::get('/mentores', 'MentorController@indexMentor')->name('mentores');
Route::post('/ingresarmentor', 'MentorController@guardarMentor')->name('ingresarmentor');
Route::get('/eliminarmentor/{id}', 'MentorController@eliminarMentor')->name('eliminarmentor');
Route::get('/editarmentor/{id}', 'MentorController@editarMentor')->name('editarmentor');
Route::post('/actualizarmentor/{id}', 'MentorController@actualizarMentor')->name('actualizarmentor');

Route::get('/sponsores', 'SponsorController@indexSponsor')->name('sponsores');
Route::post('/ingresarsponsor', 'SponsorController@guardarSponsor')->name('ingresarsponsor');
Route::get('/eliminarsponsor/{id}', 'SponsorController@eliminarSponsor')->name('eliminarsponsor');
Route::get('/editarsponsor/{id}', 'SponsorController@editarSponsor')->name('editarsponsor');
Route::post('/actualizarsponsor/{id}', 'SponsorController@actualizarSponsor')->name('actualizarsponsor');

Route::get('/organizadores', 'OrganizadorController@indexOrganizador')->name('organizadores');
Route::post('/ingresarorganizador', 'OrganizadorController@guardarOrganizador')->name('ingresarorganizador');
Route::get('/eliminarorganizador/{id}', 'OrganizadorController@eliminarOrganizador')->name('eliminarorganizador');
Route::get('/editarorganizador/{id}', 'OrganizadorController@editarOrganizador')->name('editarorganizador');
Route::post('/actualizarorganizador/{id}', 'OrganizadorController@actualizarOrganizador')->name('actualizarorganizador');


Auth::routes(['register' => true]);
Route::get('/home', 'HomeController@index')->name('home');
