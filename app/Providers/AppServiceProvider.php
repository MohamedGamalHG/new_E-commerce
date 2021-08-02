<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $path_dist = 'public/Panel/dist';
        $path_plugin = 'public/Panel/plugins';
        View::share('dist_css',$path_dist.'/css');
        View::share('dist_js',$path_dist.'/js');
        View::share('dist_img',$path_dist.'/img');
        View::share('plugins',$path_plugin);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
