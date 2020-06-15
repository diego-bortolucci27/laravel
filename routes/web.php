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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('contato', function(){

// return "página de contato!";

// });

// Route::get('pagina',function(){
//     return '
//             <html>
//                 <head>
//                         <title>Rotas</title>
//                 </head>
//                 <body>
//                 <h1>Resposta!</h1>
//                 <p>Resposta usando elementos HTML</p>
//                 <button>Clique aqui</button>
//                 </body>
//             </html> ';
// });

// // app/Http/middleware/verifyCsrfToken.php - inserir o contato
// Route::post('contato',function(){

// return "Realizando um post";
// });


// Route::put('contato', function () {
//     return 'Realizando um put';
// });


// Route::delete('contato', function () {
//     return 'Realizando um delete';
// });


// Route::match(['get','post'], 'sobre', function(){
//     return 'Trabalhando com match!';
// });


// Route::any('todos', function(){
//     $url = url('nova');
//     return 'todos '.$url;
// });

// // --------------------------------------------

// Route::get('produto/{id}', function($id){
//     return "produto id: {$id}";
// });

// Route::get('artigo/{id?}', function($id = null){
// return "Artigo id: {$id}";
// });

// Route::get('categoria/{id?}/cor/{cor?}',function($id = null, $cor = 'azul'){
//     return "Categoria id: {$id} - Cor: {$cor}";
// });


// Route::get('link',['as'=>'link', function(){
//     return '
//     <h1 align="center"> Testando o link</h1>
//     <p>
//     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
//     At ut voluptatibus, vero, ad qui doloremque nobis voluptatum nisi 
//     quos maiores nihil? Cupiditate impedit hic quam blanditiis inventore
//      veniam, fuga et.
//      </p>
//      <a href="'.route('detalhe').'">
//      <input type="button" value="Ir para teste" />
//      </a>';
// }]);

// Route::get('leandro',['as'=>'detalhe',function(){
//  return 'Página teste - Leandro';
// }]);


Auth::routes();

Route::get('/cliente', ['uses'=>'ClienteController@index','as'=>'cliente.index']);

Route::get('/cliente/adicionar',['uses'=>'ClienteController@adicionar','as'=>'cliente.adicionar']);

Route::post('/cliente/salvar',['uses'=>'ClienteController@salvar','as'=>'cliente.salvar']);

Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar', 'as'=>'cliente.editar']);

Route::put('/cliente/atualizar/{id}', ['uses'=>'ClienteController@atualizar', 'as'=>'cliente.atualizar']);