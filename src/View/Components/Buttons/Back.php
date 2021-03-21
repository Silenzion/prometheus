<?php

namespace Silenzion\Prometheus\View\Components\Buttons;

use Illuminate\View\Component;
class Back extends Component
{
    public $href;

    public function __construct($href)
    {
        $this->href = $href;
    }

    public function render()
    {
        return view('prometheus::admin.components.buttons.back');
    }
}
