<?php

namespace App\Providers;

use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
    public function boot(Charts $charts)
    {   
        $this->registerCharts($charts);
        Paginator::useBootstrap();
    }

    private function registerCharts(Charts $charts) {
        $charts->register([
            \App\Charts\OSChart::class,
            \App\Charts\NewProducts::class,
            \App\Charts\NewRelizes::class,
            \App\Charts\TopProducts::class
        ]);
    }
}
