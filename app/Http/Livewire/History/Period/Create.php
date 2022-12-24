<?php

namespace App\Http\Livewire\History\Period;

use App\Models\Period;
use LivewireUI\Modal\ModalComponent;
use App\Models\History;

class Create extends ModalComponent
{
    public $history;
    public string $name;
    public bool $dark;
    public bool $bloody;

    protected $rules = [
        'name' => 'required|string|min:2|max:255',
        'dark' => 'required|boolean',
        'bloody' => 'required|boolean',
    ];

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

    public function submit()
    {
        $this->validate();

        Period::create([
            'name' => $this->name,
            'dark' => $this->dark,
            'bloody' => $this->bloody,
            'history_id' => $this->history->id,
            'created_by' => auth()->user()->id ?? 1,
        ]);

        $this->closeModal();
        $this->emit('refreshIndex');
    }
}
