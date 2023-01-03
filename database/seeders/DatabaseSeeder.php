<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\Period;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        History::factory(10)->create();
        History::all()->each(function($history) {
            Period::factory()
                ->count(random_int(1, 5))
                ->onHistory($history)
                ->create();
        });
    }
}
