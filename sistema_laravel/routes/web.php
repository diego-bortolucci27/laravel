<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal');//Quando você utiliza o Controller ao invérs de passar uma function, passe uma string com o Nome do Controller e o @ com o nome da função dentro da Class Controller.

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobrenos', 'SobreNosController@sobreNos');
