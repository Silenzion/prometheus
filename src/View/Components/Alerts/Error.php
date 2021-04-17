<?php

namespace Silenzion\Prometheus\View\Components\Alerts;

use Illuminate\View\Component;

class Error extends Component
{
    public function render()
    {
        return view('prometheus::admin.components.alerts.error');
    }
}