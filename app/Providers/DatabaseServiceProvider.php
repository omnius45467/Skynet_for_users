<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Skynet\Repositories\Contracts\UserRepository;
use App\Skynet\Repositories\EloquentUserRepository;
use App\Skynet\Repositories\Contracts\TrackerRepository;
use App\Skynet\Repositories\EloquentTrackerRepository;
use Illuminate\Support\Facades\Auth;

class DatabaseServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(UserRepository::class, function () {
            return new EloquentUserRepository(Auth::user());
        });
        $this->app->bind(TrackerRepository::class, function () {
            return new EloquentTrackerRepository(Auth::user());
        });
    }

}
