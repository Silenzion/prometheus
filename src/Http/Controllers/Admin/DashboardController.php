<?php

namespace Silenzion\Prometheus\Http\Controllers\Admin;

use Silenzion\Prometheus\Http\Controllers\Controller;
use Silenzion\Prometheus\Services\DashboardService;

class DashboardController extends Controller
{
    private $dashboard;

    public function __construct(DashboardService $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function getMainDashboard()
    {
        return view("prometheus::admin.dashboards.main");
    }

    public function getSeoDashboard()
    {
        return view("prometheus::admin.dashboards.seo");
    }
}