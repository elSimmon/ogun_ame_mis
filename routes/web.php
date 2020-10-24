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

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/non_formal', 'HomeController@non_formal')->name('non_formal');
  Route::get('/crafts', 'HomeController@crafts')->name('crafts');

  // Route::get('non_formal_education/buttons', 'NonformaleducationController@create')->name('non_formal_education/buttons');
  // Route::get('non_formal_education', 'NonformaleducationController@index')->name('non_formal_education');
  // Route::resource('users','UserController');
  // Route::get('users','UserController@index')->name('active_users');
  // Route::get('users/{id}/edit/','UserController@edit');
