<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaHomeClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\FormaPagamentoController;
use App\Http\Controllers\FreteController;
use App\Http\Controllers\PromocaoController;
use App\Http\Controllers\PrivilegioController;
use App\Http\Controllers\UserController;

//Route::resource('/', ProdutoController::class);
Route::resource('/', TelaHomeClienteController::class);
Route::get('/produto/{slug}',  [TelaHomeClienteController::class, 'detalhes'])->name('TelaHomeClienteDetalhes');

//Route::resource('/', IngredienteController::class);
//Route::resource('privilegios', PrivilegioController::class);
//Route::resource('/', FormaPagamentoController::class);
//Route::resource('/', FreteController::class);
//Route::resource('/', PromocaoController::class);
//Route::resource('/', PrivilegioController::class);
//Route::resource('/', ProdutoController::class);
//Route::resource('/', UserController::class);
//Route::resource('ingredientes', IngredienteController::class);
//Route::get('/Privilegio',  [PrivilegioController::class, 'index'])->name('Privilegio');

//Route::get('/privilegio',  [PrivilegioController::class, 'index'])->name('privilegio');

/*Route::get('/', function () {
    return view('telaEmpresarialProduto');
})->name('produto');*/

//Route::get('/FreteCadastro', [] { return view('TelaEmpresarialFreteCadastro'); })->name('telaEmpresarialFreteCadastro');
//Route::get('/Ingrediente',  [IngredienteController::class, 'index'])->name('Ingrediente');
//Route::get('/Produto',  [ProdutoController::class, 'index'])->name('Produto');
/*Route::get('/TelaEmpresarialProduto', 'ProdutoController@index')->name('produto');



Route::get('/TelaEmpresarialProduto', 'ProdutoController@index')->name('produtos.index');
Route::get('/TelaEmpresarialProduto/create', 'ProdutoController@create')->name('produtos.create');
Route::post('/TelaEmpresarialProduto', 'ProdutoController@store')->name('produtos.store');
Route::get('/TelaEmpresarialProduto/{produto}', 'ProdutoController@show')->name('produtos.show');
Route::get('/TelaEmpresarialProduto/{produto}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::put('/TelaEmpresarialProduto/{produto}', 'ProdutoController@update')->name('produtos.update');
Route::delete('/TelaEmpresarialProduto/{produto}', 'ProdutoController@destroy')->name('produtos.destroy');
*/