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
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contacto', [\App\Http\Controllers\ContactoController::class,'contacto'])->name('site.contacto');
Route::post('/contacto', [\App\Http\Controllers\ContactoController::class,'save']);
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('teste');

Route::fallback(function() {
    echo 'A rota acessada, não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});