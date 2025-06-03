<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Models\Post;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    protected $policies = [ // <--- Corrected 'policies'
        Post::class => PostPolicy::class,
    ];

    public function register(): void
    {
        //
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->registerPolicies();
    }
}