<?php

namespace App\Http\Livewire\History;

use App\Models\History;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{

    public History $history;
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

    public function mount(History $history)
    {
        $this->history = $history;
        $this->name = $history->name;
        $this->summary = $history->summary;
        $this->locked = $history->locked;
    }

    public function render()
    {
        return view('livewire.history.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->history->update([
            'name' => $this->name,
            'summary' => $this->summary,
            'locked' => $this->locked,
            'updated_by' => auth()->user()->id ?? 1,
        ]);

        $this->closeModal();
        $this->emit('refreshIndex');
    }
}
