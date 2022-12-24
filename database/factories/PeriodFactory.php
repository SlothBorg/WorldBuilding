<?php


namespace Database\Factories;

use App\Models\History;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'summary' => fake()->text(),
            'locked' => fake()->boolean(),
            'created_by' => User::factory()->create()->id,
            'updated_by' => null,
        ];
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