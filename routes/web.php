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

Route::get('/test-route', function (){
    $post = \App\Post::find(1);

    return $post->tags;
});


Route::get('/', 'Blog\FrontController@allPost');

Route::get('/category/{category:slug}', "Blog\FrontController@categoryWisePosts")
->name('category-post');

Route::get('/tag/{tag:slug}', "Blog\FrontController@tagWisePosts")
    ->name('tag-post');

Route::get('/author/{user:slug}', "Blog\FrontController@authorWisePosts")
    ->name('author-post');

Route::get('/{post:slug}', 'Blog\FrontController@singlePost')->name('single-post');


Route::post('{post}/comment/store', 'CommentController@store')->name('comment.store');




