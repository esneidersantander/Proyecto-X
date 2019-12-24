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
Route::get('/about', 'ShowController@about')->name('about');


Route::get('/eventos', 'EventoController@indexEvento')->name('eventos');
Route::post('/ingresarevento', 'EventoController@guardarEvento')->name('ingresarevento');
Route::get('/eliminarevento/{id}', 'EventoController@eliminarEvento')->name('eliminarevento');

Route::get('/mentores', 'MentorController@indexMentor')->name('mentores');
Route::post('/ingresarmentor', 'MentorController@guardarMentor')->name('ingresarmentor');
Route::get('/eliminarmentor/{id}', 'MentorController@eliminarMentor')->name('eliminarmentor');

Route::get('/sponsores', 'SponsorController@indexSponsor')->name('sponsores');
Route::post('/ingresarsponsor', 'SponsorController@guardarSponsor')->name('ingresarsponsor');
Route::get('/eliminarsponsor/{id}', 'SponsorController@eliminarSponsor')->name('eliminarsponsor');

Route::get('/organizadores', 'OrganizadorController@indexOrganizador')->name('organizadores');
Route::post('/ingresarorganizador', 'OrganizadorController@guardarOrganizador')->name('ingresarorganizador');
Route::get('/eliminarorganizador/{id}', 'OrganizadorController@eliminarOrganizador')->name('eliminarorganizador');


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
