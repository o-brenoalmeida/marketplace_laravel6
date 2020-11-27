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



Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

        // Route::prefix('stores')->name('stores.')->group(function(){
            
        //     Route::get('/', 'StoreController@index')->name('index');
        //     Route::get('/create', 'StoreController@create')->name('create');
        //     Route::post('/store', 'StoreController@store')->name('store');
        //     Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        //     Route::post('/update/{store}', 'StoreController@update')->name('update');
        //     Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    
        // });
    
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
