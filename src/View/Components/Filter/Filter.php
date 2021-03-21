<?php

namespace Silenzion\Prometheus\View\Components\Filter;

use Illuminate\View\Component;

class Filter extends Component
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('prometheus::admin.components.filter.filter');
    }
}