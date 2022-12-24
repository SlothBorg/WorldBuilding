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
//        'deleteHistory',
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

    public function delete(History $history)
    {
//        open confimation modal
//        delete or abort
    }
}
