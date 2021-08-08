<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Auth;
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
        // this code like Auth::user()->name in blade template but with this code i will put there $auth->name direct just
        view()->composer('*',function($view){
           $user = Auth::user();
           $view->with('auth',$user);
        });
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
