<?php

namespace App\Http\Livewire\History;

use App\Models\History;
use Livewire\Component;

class Show extends Component
{
    public History $history;

    protected $listeners = [
        'refreshIndex' => '$refresh',
        'deleteObject' => 'delete',
    ];

    public function render()
    {
        return view('livewire.history.show');
    }
}
