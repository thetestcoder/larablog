<?php

Route::group([
    'middleware'=>['auth'],
    'prefix'=>'backpanel'
], function (){
    Route::view('/', 'backpanel.dashboard.index')->name('backpanel.dashboard');


//user routes
    Route::resource('/user', 'User\UserController');


//role routes
    Route::get('/role/{role}/assign-permission', 'User\RoleController@assignPermissionView')
        ->name('role.assign.permission');

    Route::post('/role/{role}/assign-permission', 'User\RoleController@assignPermission')
        ->name('role.store.permission');

    Route::resource('/role', 'User\RoleController');


//permission routes
    Route::resource('/permission', 'User\PermissionController');

//category Route
    Route::get('/category/trashed', 'User\CategoryController@trashedCategory')
        ->name('category.trash');
    Route::post('/category/{category}/restore', 'User\CategoryController@restoreCategory')
        ->name('category.restore');
    Route::delete('/category/{category}/force-delete', 'User\CategoryController@forceDeleteCategory')
        ->name('category.force.delete');
    Route::resource('/category', 'User\CategoryController');



//post route
    Route::post('/post/upload', 'User\PostController@uploadPhoto')->name('post.upload');
    Route::get('/post/trashed', 'User\PostController@trashedPost')
        ->name('post.trash');
    Route::post('/post/{post}/restore', 'User\PostController@restorePost')
        ->name('post.restore');
    Route::delete('/post/{post}/force-delete', 'User\PostController@forceDeletePost')
        ->name('post.force.delete');
    Route::resource('/post', 'User\PostController');


// tags
    Route::get('/tag/trashed', 'TagController@trashedTag')
        ->name('tag.trash');


    Route::post('/tag/{tag}/restore', 'TagController@restoreTag')
        ->name('tag.restore');


    Route::delete('/tag/{tag}/force-delete', 'TagController@forceDeleteTag')
        ->name('tag.force.delete');


    Route::resource('/tag', "TagController");
});
