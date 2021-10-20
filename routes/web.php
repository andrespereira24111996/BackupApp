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

//Route::group(['middleware' => 'is.admin',function(){
Auth::routes();

Route::get('/',function(){
    return view ('home'); 
}); 


 

/*
|--------------------------------------------------------------------------
| Usuario: Vistas
|--------------------------------------------------------------------------
*/


Route::resource('/Usuario','UsuarioController');





//Route::get('Usuario/editar', 'UsuarioController@edit')
//Route::post('Usuario/guardar', 'UsuarioController@store');//
//Route::post('Usuario/borrar{id}', 'UsuarioController@destroy');//





/*
|--------------------------------------------------------------------------
| Denuncia: Vistas
|--------------------------------------------------------------------------
*/

Route::resource('Denuncia', 'DenunciaController');

//Route::resource('Noticia', 'NoticiaController');//




Route::resource('Resolucion','ResolucionController');//

Route::get('Resolucion/crear', 'ResolucionController@create')->name('resoluciones.create');


//Route::get('Resolucion', 'UsuarioController@index');
//Route::get('Resolucion/crear', 'ResolucionController@create')->name('resoluciones.create');

Route::resource('Noticia','NoticiaController'); 






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
