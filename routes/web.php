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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::prefix('users')->as('users.')->group(function (){

    Route::get('create','UsersController@create')->name('create');
    Route::get('store','UsersController@store')->name('store');
    Route::get('/','UsersController@index')->name('index');
    Route::get('edit/{id}','UsersController@edit')->name('edit');
    Route::put('update/{id}','UsersController@update')->name('update');
    Route::delete('destroy/{id}','UsersController@destroy')->name('destroy');
    Route::get('user-products/{id}','UsersController@UserProducts');

});

Route::prefix('categories')->as('category.')->group(function (){

    Route::get('create','CategoryController@create')->name('create');
    Route::post('store','CategoryController@store')->name('store');
    Route::get('/','CategoryController@index')->name('index');
    Route::get('edit/{id}','CategoryController@edit')->name('edit');
    Route::put('update/{id}','CategoryController@update')->name('update');
    Route::delete('destroy/{id}','CategoryController@destroy')->name('destroy');

});


Route::prefix('products')->as('product.')->group(function (){

    Route::get('create','ProductController@create')->name('create');
    Route::post('store','ProductController@store')->name('store');
    Route::get('/','ProductController@index')->name('index');
    Route::get('edit/{id}','ProductController@edit')->name('edit');
    Route::put('update/{id}','ProductController@update')->name('update');
    Route::delete('destroy/{id}','ProductController@destroy')->name('destroy');

});





Route::get('user/factory',function (){
    factory(App\User::class, 100)->create();
});

Route::get('category/factory',function (){
    factory(App\Category::class, 20)->create();
});

Route::get('product/factory',function (){
    factory(App\Product::class, 1000)->create();
});