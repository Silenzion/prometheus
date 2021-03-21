<?php

namespace Silenzion\Prometheus\View\Components\Alerts;

use Illuminate\View\Component;

class Success extends Component
{
    public function render()
    {
        return view('prometheus::admin.components.alerts.error');
    }
}