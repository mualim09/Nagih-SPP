<?php

namespace App\Providers;

use App\Repositories\SiswaRepository;
use App\Repositories\SiswaRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(SiswaRepositoryInterface::class, SiswaRepository::class);
    }
}
