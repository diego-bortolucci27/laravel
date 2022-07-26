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

Route::get('/', 'PrincipalController@principal')->name('site.index');//Quando você utiliza o Controller ao invérs de passar uma function, passe uma string com o Nome do Controller e o @ com o nome da função dentro da Class Controller.

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produtos', function(){  return 'Produtos'; })->name('app.produtos');
});


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

//Redirecionamento de Rotas
Route::get('/rota1', function(){ echo 'Rota 1'; })->name('site.rota1');
Route::get('/rota2', function(){ return redirect()->route('site.rota1'); })->name('site.rota2');

//Route::redirect('/rota2', '/rota1');

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//Rota de Fallback - Rota/página de erro - de rota inexistente
Route::fallback(function (){
    echo 'Página inexistente.  <a href="'.route('site.index').'">Clique aqui</a>; para ir a pagina inicial'; 
});