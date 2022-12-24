<?php

namespace App\Http\Livewire\History;

use App\Models\History;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

//    protected array $listeners = ['refresh'];
    protected $listeners = [
        'refreshIndex' => '$refresh',
        'deleteObject' => 'delete',
    ];

    public function render()
    {
        return view('livewire.history.index', [
            'histories' => History::paginate(25),
        ]);
    }

    public function edit(History $history)
    {

    }

    public function openConfirmation(History $history)
    {
        $this->emit(
            'openModal',
            'component.confirmation-modal',
            [
                'object' => $history,
                'objectName' => $history->name,
                'objectType' => 'History',
                'eventName' => Index::getName(),
            ]
        );
    }

    public function delete(History $history)
    {
        $history->delete();
        $this->emit('refreshIndex');
    }
}
