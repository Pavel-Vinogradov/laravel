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
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    else{
        return 'empty';
    }

});

Route::get('/post/{id}',function ($id){
    return "Post $id";
});
