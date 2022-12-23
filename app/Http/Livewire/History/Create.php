<?php

namespace App\Http\Livewire\History;

use App\Models\History;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public string $name = '';
    public string $summary = '';
    public bool $locked;

    protected $rules = [
        'name' => 'required|string|min:4|max:120|unique:histories',
        'summary' => 'required|string|min:12',
        'locked' => 'required|boolean',
    ];

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function render()
    {
        return view('livewire.history.create');
    }

    public function submit()
    {
        $this->validate();

        History::create([
            'name' => $this->name,
            'summary' => $this->summary,
            'locked' => $this->locked,
            'created_by' => auth()->user()->id ?? 1,
        ]);

        $this->closeModal();
        $this->emit('refreshIndex');
    }
}
