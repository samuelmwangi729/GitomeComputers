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
});