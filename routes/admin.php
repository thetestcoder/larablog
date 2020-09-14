<?php


Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');


//user routes
Route::resource('backpanel/user', 'User\UserController');


//role routes
Route::get('/backpanel/role/{role}/assign-permission', 'User\RoleController@assignPermissionView')
    ->name('role.assign.permission');

Route::post('/backpanel/role/{role}/assign-permission', 'User\RoleController@assignPermission')
    ->name('role.store.permission');

Route::resource('/backpanel/role', 'User\RoleController');


//permission routes
Route::resource('/backpanel/permission', 'User\PermissionController');

//category Route
Route::get('/backpanel/category/trashed', 'User\CategoryController@trashedCategory')
    ->name('category.trash');
Route::post('/backpanel/category/{category}/restore', 'User\CategoryController@restoreCategory')
    ->name('category.restore');
Route::delete('/backpanel/category/{category}/force-delete', 'User\CategoryController@forceDeleteCategory')
    ->name('category.force.delete');
Route::resource('/backpanel/category', 'User\CategoryController');



//post route
Route::post('/backpanel/post/upload', 'User\PostController@uploadPhoto')->name('post.upload');
Route::get('/backpanel/post/trashed', 'User\PostController@trashedPost')
    ->name('post.trash');
Route::post('/backpanel/post/{post}/restore', 'User\PostController@restorePost')
    ->name('post.restore');
Route::delete('/backpanel/post/{post}/force-delete', 'User\PostController@forceDeletePost')
    ->name('post.force.delete');
Route::resource('/backpanel/post', 'User\PostController');

