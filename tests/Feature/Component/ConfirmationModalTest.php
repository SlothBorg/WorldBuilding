<?php

namespace Tests\Feature\Component;

use App\Http\Livewire\Component\ConfirmationModal;
use App\Models\History;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ConfirmationModalTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function ensure_it_renders()
    {
        $data = [
            'object' => History::factory()->create(),
            'objectName' => 'Test History',
            'objectType' => 'History',
            'eventName' => 'Test-Event',
        ];

        Livewire::test(ConfirmationModal::class, $data)
            ->assertSee('Cancel')
            ->assertSeeText('Are you sure you want to delete this History Test History')
            ->assertSee('Yes, Delete it.');
    }

    /** @test */
    public function ensure_it_renders_with_a_custom_action()
    {
        $data = [
            'object' => History::factory()->create(),
            'objectName' => 'Test History',
            'objectType' => 'History',
            'eventName' => 'Test-Event',
            'objectAction' => 'MURDER!',
        ];

        Livewire::test(ConfirmationModal::class, $data)
            ->assertSee('Cancel')
            ->assertSeeText('Are you sure you want to MURDER! this History Test History')
            ->assertSee('Yes, MURDER! it.');
    }

    /** @test * */
    public function ensure_it_emits_the_proper_event()
    {
        // simple data is used, so we don't have to worry about the position of arguments in a json encoded string.
        $object = 'Fake Object';
        $data = [
            'object' => $object,
            'objectName' => 'object-Name',
            'objectType' => 'object-Type',
            'eventName' => 'Event-Name',
        ];

        Livewire::test(ConfirmationModal::class, $data)
            ->call('confirm')
            ->assertEmitted('deleteObject', $object);
    }

    /** @test * */
    public function ensure_it_can_emit_a_custom_event()
    {
        // simple data is used, so we don't have to worry about the position of arguments in a json encoded string.
        $object = 'Fake Object';
        $listener = 'Custom-Listener-Name';
        $data = [
            'object' => $object,
            'objectName' => 'object-Name',
            'objectType' => 'object-Type',
            'eventName' => 'Event-Name',
            'listener' => $listener,
        ];

        Livewire::test(ConfirmationModal::class, $data)
            ->call('confirm')
            ->assertEmitted($listener, $object);
    }
}
