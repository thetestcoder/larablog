<?php


Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');


//user routes
Route::resource('backpanel/user', 'User\UserController');


//role routes
Route::resource('/backpanel/role', 'User\RoleController');


//permission routes
Route::resource('/backpanel/permission', 'User\PermissionController');

