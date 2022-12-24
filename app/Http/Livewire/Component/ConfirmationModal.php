<?php

namespace App\Http\Livewire\Component;

use LivewireUI\Modal\ModalComponent;

class ConfirmationModal extends ModalComponent
{
    public $object;
    public $name;
    public $type;
    public $event;
    public $action;
    public $listener;

    /*
     * Defines the width of the modal, uses the tailwind font-sizes sm, md, lg, xl, 2xl etc.
     * Used width classes are listed, for the tailwind purge
     */
    public static function modalMaxWidth(): string
    {
        // sm:max-w-lg
        return 'lg';
    }

    public function mount($object, string $objectName, string $objectType, string $eventName, string $objectAction = '', string $listener = '')
    {
        $this->object = $object;
        $this->name = $objectName;
        $this->type = $objectType;
        $this->action = empty($objectAction) ? 'delete' : $objectAction;
        $this->event = $eventName;
        $this->listener = empty($listener) ? 'deleteObject' : $listener;
    }

    public function render()
    {
        return view('livewire.component.confirmation-modal');
    }

    public function confirm()
    {
        $this->closeModalWithEvents([
            $this->event => [
                $this->listener,
                [
                    $this->object
                ]
            ]
        ]);
    }
}