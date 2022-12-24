<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OpenModalButton extends Component
{
    public string $modalName = '';
    public string $text = '';
    public string $variableName = '';
    public $variable;
    public bool $hasData = false;
    public string $cssClass = 'font-bold hover:text-accent-red hover:underline hover:decoration-2';

    public function __construct(string $modalName, string $text, string $dataName='', $data=null, string $cssClass='')
    {
        $this->modalName = $modalName;
        $this->text = $text;
        $this->variableName = $dataName;
        $this->variable = $data;

        if (isset($this->variableName) && isset($this->variable)) {
            $this->hasData = true;
        }

        if (!empty($cssClass))
        {
            $this->cssClass = $cssClass;
        }
    }

    public function render()
    {
        return view('components.open-modal-button');
    }
}
