<?php

namespace App\View\Components;

use App\Models\Period;
use Illuminate\View\Component;

class Card extends Component
{
    public Period $object;
    public bool $dark = false;
    public bool $bloody = false;
    public string $border = 'border-dark';
//    public string $orientation;

    public function __construct(Period $object)
    {
        $this->object = $object;
        $this->dark = $object->dark;
        $this->bloody = ($object instanceof Period) ? $object->bloody : false;

        if ($this->bloody) {
            $this->border = 'border-accent-red';
        }
    }

    public function render()
    {
        return view('components.card');
    }
}
