<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/teasrag', function () {
    // return view('welcome')->with('data',2);
    // return view('welcome')->with(['age'=>2,'name'=>'eng.Ahmed']);
    $data=[];
    $data['name']='Eng.Ahmed';
    $data['age']=5;
    return view('welcome',$data);
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
Route::group(['prefix','users','middleware'=>'auth'],function(){
    Route::get('test2',function(){
        return 'Work';
    });
});


//maek middleware to coustme rout
Route::get('check', function () {
    return 'middleware';
})->middleware('auth');

// show data withe controller with name spease
Route::get('frist','Front\FirstController@showData');

// or use name space wein you have more route
// route name space
// Route::namespace('Front')->group(function(){
//  all route only access controller or method in folder name front
//     Route::get('users','UserController@showAdminName');.
// Route::get('frist','FirstController@showData');
//     });

// meddlweare
Route::namespace('Front')->group(function(){
//  all route only access controller or method in folder name front
    Route::get('users','UserController@showAdminName');
Route::get('frist3','FirstController@showData3');
Route::get('frist2','FirstController@showData2')->middleware('auth');
    });

    Route::get('login',function(){
        return 'You neade to Login to Acsess!!';
    })->name('login');


Route::resource('news','NewsController');

Route::get('index','Front\UserController@getIndex');
Route::get('ragmyat',function(){
return view('index');
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    return view('index');
});