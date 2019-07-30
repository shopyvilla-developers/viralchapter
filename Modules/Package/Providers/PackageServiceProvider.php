<?php

namespace Modules\Package\Providers;

use Modules\Package\Admin\PackageTabs;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Ui\Facades\TabManager;

class PackageServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     
        TabManager::register('packages', PackageTabs::class);

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
