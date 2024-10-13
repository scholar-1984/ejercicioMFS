<?php

namespace App\View\Components\common;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormControl extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct( public $icon, public $label, public $type, public $name, public $placeholder)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.form-control');
    }

    public static function createControlArray ($icon, $label, $type, $name, $placeholder)
    {
        return ['icon' => $icon,
        'label' => $label,
        'type' => $type,
        'name' => $name,
        'placeholder' => $placeholder,
    ];
    }
}
