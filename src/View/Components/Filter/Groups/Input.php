<?php

namespace Silenzion\Prometheus\View\Components\Filter\Groups;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;

    public function __construct($name, $label)
    {
        $this->name = $name;
        $this->label = $label;
    }


    public function render()
    {
        return view('prometheus::admin.components.filter.groups.input');
    }
}