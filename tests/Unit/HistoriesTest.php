<?php

namespace Tests\Unit;

use App\Models\History;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HistoriesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_a_history()
    {
        $this->assertDatabaseCount('histories', 0);
        $user = User::factory()->create();

        $history = History::create(
            [
                'name' => 'Traveling to Europe',
                'summary' => fake()->text(),
                'locked' => false,
                'created_by' => $user->id,
            ]
        );

        $this->assertDatabaseCount('histories', 1);
        $this->assertDatabaseHas('histories', [
            'name' => $history->name,
            'summary' => $history->summary,
            'locked' => $history->locked,
            'created_by' => $history->created_by,
        ]);
    }

    /** @test */
    public function can_update_a_history()
    {
        $history = History::factory()->create();
        $this->assertDatabaseCount('histories', 1);
        $this->assertDatabaseHas('histories', [
            'name' => $history->name,
            'summary' => $history->summary,
            'locked' => $history->locked,
            'created_by' => $history->created_by,
        ]);

        $now = now();
        $newSummary = 'This is the new summary!';

        $history->update([
            'summary' => $newSummary,
            'updated_at' => $now
        ]);

        $this->assertDatabaseCount('histories', 1);
        $this->assertDatabaseHas('histories', [
            'id' => $history->id,
            'summary' => $newSummary,
            'updated_at' => $now,
        ]);
    }
}
