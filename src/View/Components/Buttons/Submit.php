<?php

namespace Silenzion\Prometheus\View\Components\Buttons;

use Illuminate\View\Component;
class Submit extends Component{
    public $value;
    public function __construct( $value)
    {

        $this->value = $value;
    }

    public function render()
    {
        return view('prometheus::admin.components.buttons.submit');
    }
}