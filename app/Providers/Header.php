<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Header extends ServiceProvider
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
        // Blade::component('components.header', Header::class);
        Blade::component('components.header.header-brand', HeaderBrand::class);
    }
}
