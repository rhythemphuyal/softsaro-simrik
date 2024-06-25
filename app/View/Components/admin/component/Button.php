<?php

namespace App\View\Components\admin\component;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public  $color;
    public $type;
    public function __construct($color='blue',$type='submit')
    {
        //
        $this->color = $color;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.component.button');
    }
}
