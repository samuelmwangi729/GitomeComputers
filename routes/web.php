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
Route::get('track',[
    'uses'=>'OrdersController@track',
    'as'=>'track'
]);
Route::post('order/check',[
    'uses'=>'OrdersController@check',
    'as'=>'orders.check'
]);
Route::get('/Our/Services',[
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
Route::get('/CheckOut',[
    'uses'=>'CartController@checkout',
    'as'=>'checkout'
]);
Route::post('/Quote/Request',[
    'uses'=>'IndexController@store',
    'as'=>'quotes'
]);
Auth::routes();
Route::resource('orders','OrdersController');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cart','CartController');
Route::resource('appointments','AppointmentsController');

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

    Route::get('Orders/All',[
        'uses'=>'OrdersController@all',
        'as'=>'orders.all'
    ]);
    Route::get('Orders/Delete/{id}',[
        'uses'=>'OrdersController@destroy',
        'as'=>'orders.delete'
    ]);
    Route::resource('users', 'UsersController');
    Route::resource('messages','MessagesController');
    Route::resource('services', 'ServicesController');
    Route::resource('contacts', 'ContactsController');
    Route::resource('quotes', 'QuotesController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::resource('brands', 'BrandsController');
    Route::resource('platforms', 'PlatformsController');
    Route::resource('shops', 'ShopController');
    Route::get('Product/Delete/{id}',[
        'uses'=>'ProductsController@destroy',
        'as'=>'product.destroy'
    ]);
    Route::get('Slider/Delete/{id}',[
        'uses'=>'ShopController@destroy',
        'as'=>'shops.delete'
    ]);
    Route::get('Platform/Delete/{id}',[
        'uses'=>'PlatformsController@destroy',
        'as'=>'platforms.delete'
    ]);
    Route::get('/Appointments',[
        'uses'=>'AppointmentsController@all',
        'as'=>'appointments.all'
    ]);
    Route::get('/profile',[
        'uses'=>'AppointmentsController@profile',
        'as'=>'profile'
    ]);
    Route::post('/profile/Update',[
        'uses'=>'AppointmentsController@pupdate',
        'as'=>'password.update'
    ]);
});