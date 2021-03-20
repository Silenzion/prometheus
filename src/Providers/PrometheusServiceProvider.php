<?php

namespace Silenzion\Prometheus\Providers;

use Blade;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;
use Voletale\Prometheus\Http\Middleware\CheckStatus;
use Silenzion\Prometheus\Console\Commands\Prometheus\InstallCommand;
use Silenzion\Prometheus\Console\Commands\Prometheus\SeedCommand;
use Silenzion\Prometheus\Providers\AuthServiceProvider;
use Silenzion\Prometheus\Providers\ViewServiceProvider;

class PrometheusServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerInContainer();
        $this->mergeConfigs();
    }

    public function boot()
    {
        $this->loadResources();
//        $this->publish();
        $this->registerCommands();
//        $this->registerComponents();
    }

    private function registerInContainer()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(ViewServiceProvider::class);
//        $this->app['router']->aliasMiddleware('admin.status', CheckStatus::class);
        $this->app->make(Factory::class)->load(__DIR__ . '/../../database/factories');
    }

    private function mergeConfigs()
    {
//        $this->mergeConfigFrom(__DIR__ . '/../../config/prometheus-general.php', 'prometheus-general');
    }

    private function loadResources()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/breadcrumbs.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'prometheus');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'prometheus');
    }
    private function publish(){

    }
    private function registerCommands(){
        if ($this->app->runningInConsole()) {
            $this->commands([InstallCommand::class,
                SeedCommand::class,]);
        }
    }
}
