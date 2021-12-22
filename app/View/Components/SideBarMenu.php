<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBarMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route,$name,$icon;
    public function __construct($route,$name,$icon)
    {
        $this->route = $route;
        $this->name = $name;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar-menu');
    }
}
