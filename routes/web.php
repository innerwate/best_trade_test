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

Route::get('/', 'ProductController@getAll');
Route::get('/create', function () {
    return view('create');
});
Route::get('/edit/{id}', 'ProductController@getOne');
Route::post('/create/create_product', 'ProductController@createNew');
Route::delete('/delete/{id}', 'ProductController@deleteItem');
