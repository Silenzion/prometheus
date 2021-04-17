<?php

namespace  Silenzion\Prometheus\View\Components\Form\Groups;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $label;
    public $old;
    public $counter;

    public function __construct($name, $label, $old = null, $counter = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->old = $old;
        $this->counter = $counter;
    }

    public function render()
    {
        return view('prometheus::admin.components.translatable.groups.textarea');
    }
}