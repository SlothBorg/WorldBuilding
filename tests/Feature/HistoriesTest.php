<?php

namespace Tests\Feature;

use App\Models\Histories;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HistoriesTest extends TestCase
{
    /** @test */
    public function can_create_a_history()
    {
        $this->assertDatabaseCount('histories', 0);
        $user = User::factory()->create();

        $history = Histories::create(
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
        $history = Histories::factory()->create();
        $this->assertDatabaseCount('histories', 1);
        $this->assertDatabaseHas('histories', [
            'name' => $history->name,
            'summary' => $history->summary,
            'locked' => $history->locked,
            'created_by' => $history->created_by,
        ]);

        Carbon::setTestNow();

        $history->update([

        ]);

        $this->assertDatabaseCount('histories', 1);
        $this->assertDatabaseHas('histories', [
            'name' => $history->name,
            'summary' => $history->summary,
            'locked' => $history->locked,
            'created_by' => $history->created_by,
        ]);
    }
}
