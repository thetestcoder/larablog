<?php

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'backpanel'
], function () {
    Route::get('/', function () {
        return view('backpanel.dashboard.index');
    })->name('backpanel.dashboard');

    Route::group(['middleware' => 'role:admin'], function () {
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
    });

    Route::group(['middleware' => "role:admin|editor"], function () {
        //category Route
        Route::get('/category/trashed', 'User\CategoryController@trashedCategory')
            ->name('category.trash');
        Route::post('/category/{category}/restore', 'User\CategoryController@restoreCategory')
            ->name('category.restore');
        Route::delete('/category/{category}/force-delete', 'User\CategoryController@forceDeleteCategory')
            ->name('category.force.delete');
        Route::resource('/category', 'User\CategoryController');

        // tags
        Route::get('/tag/trashed', 'TagController@trashedTag')
            ->name('tag.trash');


        Route::post('/tag/{tag}/restore', 'TagController@restoreTag')
            ->name('tag.restore');


        Route::delete('/tag/{tag}/force-delete', 'TagController@forceDeleteTag')
            ->name('tag.force.delete');


        Route::resource('/tag', "TagController");
    });


//post route
    Route::post('/post/upload', 'User\PostController@uploadPhoto')->name('post.upload');
    Route::get('/post/trashed', 'User\PostController@trashedPost')
        ->name('post.trash');
    Route::post('/post/{post}/restore', 'User\PostController@restorePost')
        ->name('post.restore');
    Route::delete('/post/{post}/force-delete', 'User\PostController@forceDeletePost')
        ->name('post.force.delete');
    Route::resource('/post', 'User\PostController');


    //comments route
    Route::get('/comments', "CommentController@index")
        ->name('comment.index');

    Route::put('/comments/{comment}/approve', "CommentController@approve")
        ->name('comment.approve');

    Route::get('/comments/edit/{comment}', "CommentController@edit")
        ->name('comment.edit');
    Route::put('/comments/edit/{comment}', "CommentController@update")
        ->name('comment.update');
    Route::delete('/comments/delete/{comment}', "CommentController@destroy")
        ->name('comment.destroy');

    //site settings
    Route::get("/site-settings", "SiteOptionController@index")->name('setting.index');
    Route::post("/site-settings", "SiteOptionController@store")->name('setting.store');
});
