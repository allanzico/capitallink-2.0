<?php

namespace App\Providers;

use App\Models\Savings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewSharedServiceProvider extends ServiceProvider
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
        //

        $savings = Savings::with('users')->get();
        View::share('savings', $savings);
    }
}
