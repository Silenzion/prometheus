<?php

namespace Silenzion\Prometheus\View\Components;
use Illuminate\View\Component;

class NoData extends Component
{
    public function render()
    {
        return view('prometheus::admin.components.no-data');
    }
}