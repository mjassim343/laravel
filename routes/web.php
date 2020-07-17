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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('pages.home',['name' => 'Jassim','tag' => 'we are creating innovative web application']);
}); */
/* Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('about', function () {
    return view('pages.about');
}); */
Route::get('/', 'PageController@home');
Route::get('contact', 'PageController@contact');
Route::get('about', 'PageController@about');

Route::get('post', 'PostController@index');

