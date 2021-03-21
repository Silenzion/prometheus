<?php

namespace Silenzion\Prometheus\View\Components\Badges;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct($type,$message, $theme = 'default')
    {
        $this->type = $type;
        $this->message = $message;
        $this->theme = $theme;
    }
    public function isDefault(){
        return $this->theme == 'default';
    }
    public function render(){
        return view('prometheus::admin.components.badges.badge');
    }
}