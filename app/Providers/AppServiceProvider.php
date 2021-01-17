<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('admin.*', function (\Illuminate\View\View $view) {
            $view->with('currentRouteName', Route::currentRouteName());
        });

        Blade::directive('currentForm', function ($routeName) {
            return "<?php echo ucwords(str_replace('.', ' &raquo; ', $routeName)); ?>";
        });
    }
}
