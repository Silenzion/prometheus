<?php

namespace Silenzion\Prometheus\Services;

use Cache;
use Silenzion\Prometheus\Models\Redirect;
use Spatie\MissingPageRedirector\Redirector\Redirector;
use Symfony\Component\HttpFoundation\Request;

class DatabaseRedirector implements Redirector
{
    public function getRedirectsFor(Request $request): array
    {
        return Cache::rememberForever('redirect_cache_routes', function () {
            return Redirect::all()->flatMap(function ($redirect) {
                return [$redirect->from => [$redirect->to, $redirect->status_code]];
            })->toArray();
        });
    }
}
