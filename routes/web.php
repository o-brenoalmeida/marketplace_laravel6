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

Route::get('/model', function(){
    $products = \App\Product::all(); // select * from products

    $user = new \App\User();
    $user->name = 'Usuário Teste';
    $user->email = 'email@test.com';
    $user->password = bcrypt('12345678');
//    return $user->save();

    return $user->all();
});



Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::prefix('stores')->group(function(){
        Route::get('/', 'StoreController@index');
        Route::get('/create', 'StoreController@create');
        Route::post('/store', 'StoreController@store');
        Route::get('/{store}/edit', 'StoreController@edit');
        Route::post('/update/{store}', 'StoreController@update');
        Route::get('/destroy/{store}', 'StoreController@destroy');

    });
    
});