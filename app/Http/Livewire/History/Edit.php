<?php

namespace App\Http\Livewire\History;

use App\Models\History;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    // can't be a history because of laravel magic bleh
    public $history;
    public string $name = '';
    public string $summary = '';
    public bool $locked;

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

    protected function rules() : array
    {
        return [
            'name' => 'required|string|min:4|max:120|unique:histories,name,' . $this->history->id,
            'summary' => 'required|string|min:12',
            'locked' => 'required|boolean',
        ];
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
