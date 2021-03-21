<?php

namespace Silenzion\Prometheus\View\Components\Buttons;

use Illuminate\View\Component;

class Restore extends Component{
    public $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function render()
    {
        return view('prometheus::admin.components.buttons.restore');
    }
}