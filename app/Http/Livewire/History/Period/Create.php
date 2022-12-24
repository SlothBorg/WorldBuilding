<?php

namespace App\Http\Livewire\History\Period;

use LivewireUI\Modal\ModalComponent;
use App\Models\History;

class Create extends ModalComponent
{
    public $history;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function mount(History $history)
    {
        $this->history = $history;
    }

    public function render()
    {
        return view('livewire.history.period.create');
    }
}
