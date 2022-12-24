<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OpenModalButton extends Component
{
    public string $modalName = '';
    public string $text = '';
    public string $cssClass = 'font-bold hover:text-accent-red hover:underline hover:decoration-2';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $modalName, string $text, string $cssClass='')
    {
        $this->modalName = $modalName;
        $this->text = $text;
        if (!empty($cssClass))
        {
            $this->cssClass = $cssClass;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.open-modal-button');
    }
}
