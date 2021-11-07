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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home/{nome?}/{idade?}', 'TesteController@exibeView')->where('nome', '[a-zA-Z]+')->where('idade','[1-9]+')->name('site.nome');


Route::get('/produtos', function(){
    echo '<h1>Produtos</h1>';
})->name('site.produtos');