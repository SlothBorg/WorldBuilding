<?php

namespace Database\Seeders;

use App\Models\Event;
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
        $this->command->info('Creating Histories');
        History::factory(10)->create();

        $this->command->info('Creating Periods');
        History::all()->each(function($history) {
            Period::factory()
                ->count(random_int(1, 5))
                ->onHistory($history)
                ->create();
        });


        $this->command->info('Creating Events');
        Period::all()->each(function($period) {
            Event::factory()
                ->count(random_int(0, 3))
                ->onPeriod($period)
                ->create();
        });
    }
}
