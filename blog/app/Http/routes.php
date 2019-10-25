<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('api',function(){

    return '11111';
});
Route::any('api/user',function(){
    $user = new App\User;
    return $user->signup();
});
Route::any('api/login',function (){
    $user = new App\User;
    return $user->login();
});

Route::any('api/age',function(){
    return 1;
});
Route::any('greeting',function (){
    return view('greeting',['name'=>'12312312']);
});
Route::any('user','UserController@update');

Route::get('post/create','PostConrtoller@create');

Route::post('post','PostController@store');