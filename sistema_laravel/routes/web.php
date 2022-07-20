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

// nome, categoria, assunto, mensagem
// Para indicar parâmetros em uma rota, basta você colocar chaves -> Route::get('/contato/{}' ..... ) com o ? quer dizer q o parametro é opcional
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{msg?}', 
        function (
            string $nome = 'nome', 
            string $categoria = 'categoria', 
            string $assunto = 'assunto', 
            string $msg = 'mensagem'
        ) 
        {
            echo 'Estamos aqui: ' . $nome . ' - ' . $categoria . ' - ' . $assunto . ' - ' . $msg;
        });
