<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // categories globally share to all view
        View::share('categories', Category::all());
        // latest post share to all view
        $latestPost = Post::latest()->take(3)->get();
        View::share('latestPosts', $latestPost);

    }
}
