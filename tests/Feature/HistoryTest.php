<?php

namespace Tests\Feature;

use App\Models\History;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HistoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_list_of_histories()
    {
        $this->get('/history')
            ->assertSeeText('Histories')
            ->assertSeeText('No history has been created yet.')
            ->assertSeeText('Create the first History!')
            ->assertOk();
    }

    /** @test */
    public function can_view_a_history()
    {
        $history = History::factory()->create();

        $this->get('/history')
            ->assertOk();
    }
}
