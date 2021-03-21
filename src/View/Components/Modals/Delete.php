<?php

namespace Silenzion\Prometheus\View\Components\Modals;

use Illuminate\View\Component;
class Delete extends Component
{
    public $force;

    public function __construct($force = false)
    {
        $this->force = $force;
    }

    public function render()
    {
        return view('prometheus::admin.components.modals.delete');
    }
}
