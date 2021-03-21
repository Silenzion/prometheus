<?php

namespace Silenzion\Prometheus\View\Components;

use Illuminate\View\Component;

class Section extends Component{
    public $theme;
    public $title;

    public function __construct($theme, $title)
    {
        $this->theme = $theme;
        $this->title = $title;
    }
    public function themeIsDefault()
    {
        return $this->theme === 'default';
    }
    public function render()
    {
        return view('prometheus::admin.components.section');
    }
}