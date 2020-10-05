<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Auth::routes(['register'=> false]);

Route::get('/home', 'HomeController@index')->name('home');

require 'admin.php';


Route::get('/', 'Blog\FrontController@allPost');
Route::get('/{post:slug}', 'Blog\FrontController@singlePost')->name('single-post');
