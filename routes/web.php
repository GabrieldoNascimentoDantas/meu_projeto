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
/*
Route::get('/', function () {
    return 'Olá, Seja bem vindo ao curso';
});

*/ 



Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login',function() { return 'Login';})->name('site.login');

//rotas 

Route::prefix('/app')->group(function() {
Route::get('/clientes',function() { return 'Clientes';})->name('app.clientes');

Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

Route::get('/produtos', function() { return 'Produtos';})->name('app.produtos');
});


//rota de teste
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


//rota para pagina não encontrada

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'. route('site.index').'"clique aqui</a> para ir para a pagina inicial';
});

