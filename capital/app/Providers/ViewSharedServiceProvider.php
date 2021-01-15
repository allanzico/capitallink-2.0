<?php

namespace App\Providers;

use App\Http\Controllers\SavingsController;
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
        $this->registerBindings();
    }

    public function registerBindings()
    {
        $this->app->singleton(SavingsController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $savings = Savings::with(['user', 'subscriptionType'])->paginate(10);
        View::share('savings', $savings);
    }
}
