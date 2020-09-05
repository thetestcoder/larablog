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

