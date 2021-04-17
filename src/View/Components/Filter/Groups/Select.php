<?php

namespace Silenzion\Prometheus\View\Components\Filter\Groups;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $items;

    public function __construct($name, $label, $items)
    {
        $this->name = $name;
        $this->label = $label;
        $this->items = $items;
    }


    public function render()
    {
        return view('prometheus::admin.components.filter.groups.select');
    }
}