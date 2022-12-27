<?php


namespace Database\Factories;

use App\Models\History;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'dark' => fake()->boolean(),
            'bloody' => fake()->boolean(),
            'history_id' => History::factory()->create()->id,
            'created_by' => User::factory()->create()->id,
            'updated_by' => null,
        ];
    }

    public function onHistory(History $history)
    {
        return $this->state(fn (array $attributes) => [
            'history_id' => $history->id,
        ]);
    }

    public function updated()
    {
        return $this->state(fn (array $attributes) => [
            'updated_by' => User::factory()->create()->id,
        ]);
    }

    public function softDeleted()
    {
        return $this->state(fn (array $attributes) => [
            'deleted_at' => now(),
        ]);
    }
}