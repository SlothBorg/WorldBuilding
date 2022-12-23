<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LivewireActionButton extends Component
{
    public string $action = '';
    public string $text = '';
    public string $classes = '';

    /**
     * LivewireActionButton constructor.
     * @param string $action
     * @param string $text
     * @param bool $color
     */
    public function __construct(string $action='', string $text='', bool $color=false)
    {
        $this->action = $action;
        $this->text = $text;
        if ($color) {
            $this->classes = 'bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded';
        } else {
            $this->classes = 'bg-light text-dark hover:bg-dark hover:text-light font-bold py-2 px-4 rounded';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.livewire-action-button');
    }
}
