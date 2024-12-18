<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The path to your application's "home" route.
=======
<<<<<<< HEAD
     * The path to your application's "home" route.
=======
<<<<<<< HEAD
     * The path to your application's "home" route.
=======
     * The path to the "home" route for your application.
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
}
