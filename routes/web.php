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


use App\Mobile;

Route::get('/index', function () {


    $files=\App\Mobile::all();
    return view('index',compact('files'));

});
Route::get('/huawei', function () {
    $users = Mobile::where('idye', 3)->get();
//    return $user;
    return view('huawei',compact('users'));

});
Route::get('/iphone', function () {
    $users = Mobile::where('idye', 2)->get();
//    return $user;
    return view('iphone',compact('users'));

});
Route::post('/check','SamsungController@store');

Route::get('/order', function () {
    $pages= \App\Samsung::all();
//    return $pages;
    return view('order',compact('pages'));
});

Route::get('/up{id}', 'OrderController@review');
Route::post('/update','OrderController@update')->name('update');

Route::get('/samsung', function () {
    $users = Mobile::where('idye', 1)->get();
//    return $user;
    return view('samsung',compact('users'));
});
//Route::get('/check','');
// Route::get('/review',function (){
//   return view('review');
// });






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function (){
    return view('welcome');
});
