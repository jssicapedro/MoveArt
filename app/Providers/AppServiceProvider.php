<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Modalidade;

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
        $modalidades_menu = Modalidade::all();
        view()->share('modalidades_menu', $modalidades_menu);
    }
}
