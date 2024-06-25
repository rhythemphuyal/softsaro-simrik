<?php

namespace App\View\Components\admin\component;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public $class;

    public  $name;
    public  $value;
    /**
     * Create a new component instance.
     */
    public function __construct($class = "",$name,$value="")
    {
        $this->class = $class;
        $this->value = $value;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.component.textarea');
    }
}
