<?php

namespace Modules\Post\Providers;

use Modules\Post\Admin\PostTabs;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Ui\Facades\TabManager;

class PostServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        TabManager::register('posts', PostTabs::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs('permissions.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
