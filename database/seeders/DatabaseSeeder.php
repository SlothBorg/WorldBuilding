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

        $histories = History::all();
        $historyBar = $this->command->getOutput()->createProgressBar(count($histories) * 5);
        $histories->each(function($history) use ($historyBar) {
            Period::factory()
                ->count(random_int(1, 5))
                ->onHistory($history)
                ->create();
            $historyBar->advance();
        });
        $historyBar->finish();
        $this->command->info("\n");

        $this->command->info('Creating Events');
        $periods = Period::all();
        $periodBar = $this->command->getOutput()->createProgressBar(count($periods) * 5);
        $periods->each(function($period) use ($periodBar) {
            Event::factory()
                ->count(random_int(0, 3))
                ->onPeriod($period)
                ->create();
            $periodBar->advance();
        });
        $periodBar->finish();
        $this->command->info("\n");
    }
}
