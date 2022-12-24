<?php

namespace Tests\Feature;

use App\Http\Livewire\History\Create;
use App\Http\Livewire\History\Edit;
use App\Http\Livewire\History\Index;
use App\Models\History;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class HistoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_history_index_without_histories()
    {
        $this->get('/history')
            ->assertSeeLivewire('history.index')
            ->assertOk();

        Livewire::test(Index::class)
            ->assertSeeText('Histories')
            ->assertSeeText('No history has been created yet.')
            ->assertSeeText('Create the first History!');
    }

    /** @test */
    public function can_view_history_index_with_histories()
    {
        $history = History::factory()->create();

        $this->get('/history')
            ->assertSeeLivewire('history.index')
            ->assertOk();

        Livewire::test(Index::class)
            ->assertSeeText('Histories')
            ->assertSeeText($history->name)
            ->assertSeeText($history->shortSummary())
            ->assertSeeText($history->displayStatus())
            ->assertSeeText('Create a History!')
            ->assertOk();
    }

    /** @test */
    public function can_see_validation_errors_when_creating_a_new_history()
    {
        $history = History::factory()->create();
        $badName = "123";
        $badSummary = 'This is not';

        $this->assertDatabaseCount('histories', 1);

        Livewire::test(Create::class)
            ->assertSeeText('Create a new History')
            ->assertSeeText('Create History!')
            ->call('submit')
            ->assertSeeText('The name field is required.')
            ->assertSeeText('The summary field is required.')
            ->assertSeeText('The locked field is required.')
            ->set('name', $badName)
            ->set('summary', $badSummary)
            ->call('submit')
            ->assertSeeText('The name must be at least 4 characters.')
            ->assertSeeText('The summary must be at least 12 characters.')
            ->set('name', $history->name)
            ->call('submit')
            ->assertSeeText('The name has already been taken.');

        $this->assertDatabaseCount('histories', 1);
    }

    /** @test */
    public function can_create_a_new_history()
    {
        $this->assertDatabaseCount('histories', 0);

        $name = "This is a name";
        $summary = 'This is just a summary!';
        $locked = false;

        Livewire::test(Create::class)
            ->assertSeeText('Create a new History')
            ->assertSeeText('Create History!')
            ->set('name', $name)
            ->set('summary', $summary)
            ->set('locked', $locked)
            ->call('submit');

        $this->assertDatabaseCount('histories', 1);
        $this->assertDatabaseHas('histories', [
            'name' => $name,
            'summary' => $summary,
            'locked' => $locked,
        ]);
    }

    /** @test */
    public function can_edit_a_history()
    {
        $history = History::factory()->create();

        Livewire::test(Edit::class, ['history' => $history])
            ->assertSet('name', $history->name)
            ->assertSet('summary', $history->summary)
            ->assertSet('locked', $history->locked)
            ->call('submit');
    }

//    /** @test */
//    public function can_view_a_history()
//    {
//        $history = History::factory()->create();
//
//        $this->get('')
//            ->assertOk();
//    }
}
