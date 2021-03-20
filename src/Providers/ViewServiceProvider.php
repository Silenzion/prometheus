<?php

namespace Silenzion\Prometheus\Providers;

use Illuminate\Support\ServiceProvider;

use Route;
use View as ViewFacade;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        ViewFacade::composer("prometheus::admin.partials.sidebar",function (View $view){
            $route =explode('.', Route::currentRouteName());
            $target = $route[0] === 'admin' ? $route[1] : '';
            $dashboards = "";
            if($target=="dashboards"){
                $dashboards = $route[2]==="main"?"main":"seo";
            }
            $view->with(compact('dashboards','target'));
        });
        ViewFacade::composer(["prometheus::admin.partials.sidebar","prometheus::admin.dashboards.main"],function (View $view) {
            $newMainEvents=2;
            $view->with(compact('newMainEvents'));
        });
        ViewFacade::composer(["prometheus::admin.partials.sidebar","prometheus::admin.dashboards.seo"],function (View $view) {
            $newSeoEvents = 15;
            $view->with(compact('newSeoEvents'));
        });
    }
}
