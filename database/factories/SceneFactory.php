<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SceneFactory extends Factory
{
    public function definition()
    {
        return [
            'question' => fake()->text(),
            'scene' => fake()->text(),
            'answer' => fake()->text(),
            'dark' => fake()->boolean(),
            'position' => fake()->numberBetween(0, 150),
            'event_id' => Period::factory()->create()->id,
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
