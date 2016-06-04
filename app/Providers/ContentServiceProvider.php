<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * class ContentServiceProvider
 * @package App\Providers
 */
class ContentServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register bindings in the container
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Register the service provider bindings
     */
    public function registerBindings()
    {
        $this->app->bind(
            \App\Repositories\Frontend\Content\Post\PostRepositoryContract::class,
            \App\Repositories\Frontend\Content\Post\EloquentPostRepository::class
        );
    }
}
