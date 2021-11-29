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

Route::get('/test1', function () {
    return view('welcome');
});
// parameter routes

// 1- riquird parameter 
Route::get('/test2/{id}', function () {
    return view('welcome');
});

// 2- none riquird parameter 
Route::get('/test3/{id?}', function () {
    return view('welcome');
});

// route name 
Route::get('/show/{id}', function () {
    return view('welcome');
})->name('a');

Route::get('/showlast/{id?}', function () {
    return view('welcome');
});

// route name space
Route::namespace('Front')->group(function(){
// all route only access controller or method in folder name front
Route::get('users','UserController@showAdminName');
});
// route group with prefix
Route::group(['prefix','users'],function(){
    Route::get('teast',function(){
        return 'Work';
    });
});

// route group with 
Route::group(['prefix','users','middlewar'=>'auth'],function(){
    Route::get('test2',function(){
        return 'Work';
    });
});