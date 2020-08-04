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
Route::get('/Services',[
    'uses'=>'IndexController@index',
    'as'=>'services'
]);
Route::get('/Products/{slug}',[
    'uses'=>'IndexController@show',
    'as'=>'product.single'
]);
Route::get('/Contact/Us',[
    'uses'=>'IndexController@contact',
    'as'=>'contact'
]);
Route::get('/Shop/Home',[
    'uses'=>'IndexController@shop',
    'as'=>'shop'
]);
Route::post('/Quote/Request',[
    'uses'=>'IndexController@store',
    'as'=>'quotes'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/User/Roles',[
        'uses'=>'UsersController@roles',
        'as'=>'roles'
    ]);
    Route::post('/User/Roles/Post',[
        'uses'=>'UsersController@rSave',
        'as'=>'roles.post'
    ]);
    Route::get('/User/Roles/Delete/{id}',[
        'uses'=>'UsersController@rdelete',
        'as'=>'role.delete'
    ]);
    Route::get('/User/Add',[
        'uses'=>'UsersController@create',
        'as'=>'users.add'
    ]);
    Route::resource('users', 'UsersController');
    Route::resource('messages','MessagesController');
    Route::resource('services', 'ServicesController');
    Route::resource('contacts', 'ContactsController');
    Route::resource('quotes', 'QuotesController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::resource('brands', 'BrandsController');
    Route::resource('shops', 'ShopController');
    Route::get('Product/Delete/{id}',[
        'uses'=>'ProductsController@destroy',
        'as'=>'product.destroy'
    ]);
    Route::get('Slider/Delete/{id}',[
        'uses'=>'ShopController@destroy',
        'as'=>'shops.delete'
    ]);
});