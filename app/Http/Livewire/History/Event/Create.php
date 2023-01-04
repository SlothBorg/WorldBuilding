<?php

namespace App\Http\Livewire\History\Event;

use App\Models\Period;
use App\Models\Event;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public $period;
    public string $name;
    public string $summary;
    public bool $dark;

    protected $rules = [
        'name' => 'required|string|min:2|max:255',
        'summary' => 'required|string|min:2|max:255',
        'dark' => 'required|boolean',
    ];

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function mount(Period $period)
    {
        $this->period = $period;
    }

    public function render()
    {
        return view('livewire.history.event.create');
    }

    public function submit()
    {
        $this->validate();

        Event::create([
            'name' => $this->name,
            'summary' => $this->summary,
            'dark' => $this->dark,
            'period_id' => $this->period->id,
            'created_by' => auth()->user()->id ?? 1,
        ]);

        $this->closeModal();
        $this->emit('refreshIndex');
    }
}
