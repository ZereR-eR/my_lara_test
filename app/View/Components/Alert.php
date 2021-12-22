<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color,$mark,$href;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color,$mark,$href)
    {
        $this->color = $color;
        $this->mark = $mark;
        $this->href = $href;
    }

    public function checkResult(){
        if ($this->mark >= 40){
           return "success";
        }
        return "fail";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
