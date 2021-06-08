<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\{
    Category,
    User
};

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        $firstCategories = Category::take(5)->get();
        $allUsers = User::all();
        
        View::share('firstCategories', $firstCategories);
        View::share('allUsers', $allUsers);
    }
}
