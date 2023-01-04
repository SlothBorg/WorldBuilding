<?php

use App\Http\Livewire\History\Event\Create;
use App\Models\History;
use App\Models\Period;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_render()
    {
        $period = Period::factory()->create();

        Livewire::test(Create::class, ['period' => $period->id])
            ->assertSeeText('Add an Event to ' . $period->name)
            ->assertSeeText('Name')
            ->assertSeeText('Summary')
            ->assertSeeText('Light')
            ->assertSeeText('Dark')
            ->assertSeeText('Create Event!');
    }

    /** @test */
    public function can_create_an_event()
    {
        $period = Period::factory()->create();
        $name = "This is a name";
        $summary = 'This is just a basic Event summary';
        $dark = false;

        $this->assertDatabaseMissing('events', [
            'name' => $name,
            'summary' => $summary,
            'dark' => $dark,
        ]);

        Livewire::test(Create::class, ['period' => $period->id])
            ->assertSeeText('Add an Event to ' . $period->name)
            ->set('name', $name)
            ->set('summary', $summary)
            ->set('dark', $dark)
            ->call('submit')
            ->assertEmitted('refreshIndex');

        $this->assertDatabaseHas('events', [
            'name' => $name,
            'summary' => $summary,
            'dark' => $dark,
        ]);
    }

    /** @test */
    public function can_view_multiple_periods()
    {
        $this->withoutExceptionHandling();

        $history = History::factory()->create();
        $period = Period::factory()->onHistory($history)->create();
        $event1 = Event::factory()->onPeriod($period)->create();
        $event2 = Event::factory()->onPeriod($period)->create();

        $this->get(route('history.show', $history))
            ->assertSeeText($history->name)
            ->assertSeeText($period->name)
            ->assertSeeText($event1->name)
            ->assertSeeText($event2->name)
            ->assertOk();
    }
}
