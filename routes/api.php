<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::apiresource('Users', 'UserController'); 
Route::apiresource('Personas', 'PersonaController'); 
Route::apiresource('Denuncias', 'DenunciasController'); 
Route::apiresource('MinisterioPublicos', 'MinisterioPublicoController'); 
Route::apiresource('DetalleDenuncia', 'DetalleDenunciaController');
Route::apiresource('Policias', 'PoliciaController');
Route::apiresource('Diarios', 'DiarioController');
