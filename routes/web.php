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


Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');

/*
    All the product route

*/
Route::get('/products', 'Frontend\ProductsController@index')->name('products');
Route::get('/product/{slug}', 'Frontend\ProductsController@show')->name('products.show');


// Admin Routes
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'Backend\PagesController@index')->name('admin.index');

    // Product Routes
    Route::group(['prefix' => '/products'], function(){
        Route::get('/', 'Backend\ProductsController@index')->name('admin.products');
        Route::get('/create', 'Backend\ProductsController@create')->name('admin.product.create');
        Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('admin.product.edit');
        Route::POST('/store', 'Backend\ProductsController@store')->name('admin.product.store');
        Route::POST('/product/edit/{id}', 'Backend\ProductsController@update')->name('admin.product.update');
        Route::POST('/product/delete/{id}', 'Backend\ProductsController@delete')->name('admin.product.delete');
    });

    // Category Routes
    Route::group(['prefix' => '/categories'], function(){
        Route::get('/', 'Backend\CategoriesController@index')->name('admin.categories');
        Route::get('/create', 'Backend\CategoriesController@create')->name('admin.category.create');
        Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('admin.category.edit');
        Route::POST('/store', 'Backend\CategoriesController@store')->name('admin.category.store');
        Route::POST('/category/edit/{id}', 'Backend\CategoriesController@update')->name('admin.category.update');
        Route::POST('/category/delete/{id}', 'Backend\CategoriesController@delete')->name('admin.category.delete');
    });

});
