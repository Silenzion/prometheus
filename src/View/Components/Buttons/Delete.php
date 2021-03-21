<?php

namespace Silenzion\Prometheus\View\Components\Buttons;

use Illuminate\View\Component;
class Delete extends Component
{
    public $action;
    public $item;

    public function __construct($action, $item)
    {
        $this->action = $action;
        $this->item = $item;
    }

    public function render()
    {
        return view('prometheus::admin.components.buttons.delete');
    }
}