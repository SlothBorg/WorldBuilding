<?php

namespace Database\Factories;

use App\Models\Period;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => 'Event - ' . fake()->name(),
            'summary' => fake()->text(),
            'dark' => fake()->boolean(),
            'period_id' => Period::factory()->create()->id,
            'position' => fake()->numberBetween(0, 150),
            'created_by' => User::factory()->create()->id,
            'updated_by' => null,
        ];
    }

    public function onPeriod(Period $period)
    {
        return $this->state(fn (array $attributes) => [
            'period_id' => $period->id,
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
