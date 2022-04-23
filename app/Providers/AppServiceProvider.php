<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\MOdels\Category;

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


        view()->composer('*',function($view)
        {
            $totalQuantity = 0;
            $totalPrice = 0;
            $cats  = Category::orderBy('name','ASC')->get();
            $carts = session('cart') ? session('cart') : [];
            foreach ($carts as $key => $cart) {
                $totalQuantity += $cart->quantity;
                $totalPrice += $cart->quantity * $cart->price;;
            }
            $view->with(compact('cats','carts','totalQuantity','totalPrice'));
        });
    }
}
