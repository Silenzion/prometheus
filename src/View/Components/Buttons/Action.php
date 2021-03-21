<?php

namespace Silenzion\Prometheus\View\Components\Buttons;

use Illuminate\View\Component;
class Action extends Component
{
    public $href;
    public $icon;
    public $value;

    public function __construct($href, $icon, $value)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->value = $value;
    }

    public function render()
    {
        return view('prometheus::admin.components.buttons.action');
    }

}