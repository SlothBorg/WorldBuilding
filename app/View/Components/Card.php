<?php

namespace App\View\Components;

use App\Models\Event;
use App\Models\Period;
use Illuminate\View\Component;

class Card extends Component
{
    public Period|Event $object;
    public bool $horizontal = false;
    public bool $dark = false;
    public bool $bloody = false;
    public string $border = 'border-dark';

    public function __construct(Period|Event $object, bool $horizontal=true)
    {
        $this->object = $object;
        $this->horizontal = $horizontal;
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
