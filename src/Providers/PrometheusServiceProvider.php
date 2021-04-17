<?php

namespace Silenzion\Prometheus\Providers;

use Blade;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;
use Silenzion\Prometheus\View\Components\Actions;
use Voletale\Prometheus\Http\Middleware\CheckStatus;
use Silenzion\Prometheus\Console\Commands\Prometheus\InstallCommand;
use Silenzion\Prometheus\Console\Commands\Prometheus\SeedCommand;
use Silenzion\Prometheus\View\Components\Alerts\Error as ErrorAlert;
use Silenzion\Prometheus\View\Components\Alerts\Success as SuccessAlert;
use Silenzion\Prometheus\View\Components\Badges\Badge;
use Silenzion\Prometheus\View\Components\Buttons\Action as ActionButton;
use Silenzion\Prometheus\View\Components\Buttons\Add as AddButton;
use Silenzion\Prometheus\View\Components\Buttons\Back as BackButton;
use Silenzion\Prometheus\View\Components\Buttons\Delete as DeleteButton;
use Silenzion\Prometheus\View\Components\Buttons\Edit as EditButton;
use Silenzion\Prometheus\View\Components\Buttons\ForceDelete as ForceDeleteButton;
use Silenzion\Prometheus\View\Components\Buttons\Restore as RestoreButton;
use Silenzion\Prometheus\View\Components\Buttons\Submit as SubmitButton;
use Silenzion\Prometheus\View\Components\Filter\Filter;
use Silenzion\Prometheus\View\Components\Filter\Groups\Input as FilterInput;
use Silenzion\Prometheus\View\Components\Filter\Groups\Select as FilterSelect;
use Silenzion\Prometheus\View\Components\Form\Groups\File as FileInput;
//use Silenzion\Prometheus\View\Components\Form\Groups\Input;
//use Silenzion\Prometheus\View\Components\Form\Groups\Password;
//use Silenzion\Prometheus\View\Components\Form\Groups\Select;
use Silenzion\Prometheus\View\Components\Modals\Delete as DeleteModal;
use Silenzion\Prometheus\View\Components\NoData;
use Silenzion\Prometheus\View\Components\Section;
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
        $this->registerComponents();
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
    private function registerComponents()
    {
        /* Alerts */
        Blade::component(ErrorAlert::class, 'error-alert');
        Blade::component(SuccessAlert::class, 'success-alert');

        /* Badges */
        Blade::component(Badge::class, 'badge');


        /* Buttons */
        Blade::component(AddButton::class, 'add-button');
        Blade::component(EditButton::class, 'edit-button');
        Blade::component(DeleteButton::class, 'delete-button');
        Blade::component(BackButton::class, 'back-button');
        Blade::component(SubmitButton::class, 'submit-button');
        Blade::component(ActionButton::class, 'action-button');
        Blade::component(RestoreButton::class, 'restore-button');
        Blade::component(ForceDeleteButton::class, 'force-delete-button');

        /* Filter */
        Blade::component(Filter::class, 'filter');
        Blade::component(FilterInput::class, 'filter-input');
        Blade::component(FilterSelect::class, 'filter-select');

        /* Form */
//        Blade::component(Input::class, 'input');
//        Blade::component(Select::class, 'select');
//        Blade::component(Password::class, 'password');
//        Blade::component(FileInput::class, 'file-input');

        /* Modals */
        Blade::component(DeleteModal::class, 'delete-modal');

        Blade::component(Actions::class, 'actions');
        Blade::component(NoData::class, 'no-data');
        Blade::component(Section::class, 'section');

    }
}
