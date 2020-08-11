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


/**
* --------------
* GET
*
*/
Route::get('/', function () { return view('welcome'); });
Route::get('usuarios', 'UserController@listUsers')->name('list.users');
Route::get('usuario/{id}', 'UserController@getUser')->name('get.user');
Route::get('cadastro', function () { return view('cadastro'); });

/**
* --------------
* POST
*
*/
Route::post('create-user', 'UserController@createUser')->name('create.user');

/**
* --------------
* PUT/PATCH
*
*/
Route::put('update-user/{id}', 'UserController@updateUser')->name('update.user');

/**
* --------------
* DELETE
*
*/
Route::delete('delete-user/{id}', 'UserController@deleteUser')->name('delete.user');


