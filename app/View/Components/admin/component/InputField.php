<?php

namespace App\View\Components\admin\component;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $inputType;
    public $onchange;
    public $value;
    public function __construct($name,$inputType,$value=null,$onchange='loadFile(event)')
    {
        $this->name=$name;
        $this->inputType=$inputType;
        $this->onchange=$onchange;
        $this->value=$value;
    
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.component.input-field');
    }
}
 