<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaHomeClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\FormaPagamentoController;

//Route::resource('/', ProdutoController::class);

//Route::resource('/', IngredienteController::class);
//Route::resource('/', FormaPagamentoController::class);
Route::resource('/', ProdutoController::class);

/*Route::get('/TelaEmpresarialProduto', 'ProdutoController@index')->name('produto');

Route::get('/Teste', function () {
    return view('telaHomeCliente');
});

Route::get('/TelaEmpresarialProduto', 'ProdutoController@index')->name('produtos.index');
Route::get('/TelaEmpresarialProduto/create', 'ProdutoController@create')->name('produtos.create');
Route::post('/TelaEmpresarialProduto', 'ProdutoController@store')->name('produtos.store');
Route::get('/TelaEmpresarialProduto/{produto}', 'ProdutoController@show')->name('produtos.show');
Route::get('/TelaEmpresarialProduto/{produto}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::put('/TelaEmpresarialProduto/{produto}', 'ProdutoController@update')->name('produtos.update');
Route::delete('/TelaEmpresarialProduto/{produto}', 'ProdutoController@destroy')->name('produtos.destroy');
*/