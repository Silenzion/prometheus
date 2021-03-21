<?php

namespace Silenzion\Prometheus\View\Components\Buttons;

use Illuminate\View\Component;
class ForceDelete extends Component{
    public $action;
    public $id;

    public function __construct($action, $id)
    {
        $this->action = $action;
        $this->id = $id;
    }

    public function render()
    {
        return view('prometheus::admin.components.buttons.force-delete');
    }
}