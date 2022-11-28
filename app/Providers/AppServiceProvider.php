<?php

namespace App\Providers;

use Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
       Paginator::useBootstrap();

       View::composer(['layouts.user.master'], function($view){
            $view->with([
                'cartCount' => Cart::getTotalQuantity(),
                'cartTotal' => Cart::getTotal(),
                'sommeTotalPrixProduit' => Cart::getSubTotal(),
            ]);
       });

       View::composer(['layouts.auth'], function($view){
            $view->with([
                'cartCount' => Cart::getTotalQuantity(),
            ]);
       });
    }
}
