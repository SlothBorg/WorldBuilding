<?php

namespace Tests\Feature;

use App\Http\Livewire\History\Period\Create;
use App\Models\History;
use App\Models\Period;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PeriodTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_render()
    {
        $history = History::factory()->create();

        Livewire::test(Create::class, ['history' => $history->id])
            ->assertSeeText('Add a Period to ' . $history->name)
            ->assertSeeText('Name')
            ->assertSeeText('Light')
            ->assertSeeText('Dark')
            ->assertSeeText('Peaceful')
            ->assertSeeText('Bloody')
            ->assertSeeText('Create Period!');
    }

    /** @test */
    public function can_create_a_period()
    {
        $history = History::factory()->create();
        $name = "This is a name";
        $dark = false;
        $bloody = false;

        $this->assertDatabaseMissing('periods', [
            'name' => $name,
            'dark' => $dark,
            'bloody' => $bloody,
        ]);

        Livewire::test(Create::class, ['history' => $history->id])
            ->assertSeeText('Add a Period to ' . $history->name)
            ->set('name', $name)
            ->set('dark', $dark)
            ->set('bloody', $bloody)
            ->call('submit')
            ->assertEmitted('refreshIndex');

        $this->assertDatabaseHas('periods', [
            'name' => $name,
            'dark' => $dark,
            'bloody' => $bloody,
        ]);
    }

    /** @test */
    public function can_view_multiple_periods()
    {
        $history = History::factory()->create();
        $period1 = Period::factory()->onHistory($history)->create();
        $period2 = Period::factory()->onHistory($history)->create();

        $this->get(route('history.show', $history))
            ->assertSeeText($period1->name)
            ->assertSeeText($period2->name)
            ->assertOk();
    }
}
