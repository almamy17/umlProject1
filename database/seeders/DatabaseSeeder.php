<?php

namespace Database\Seeders;

use App\Models\Courtier;
use Illuminate\Database\Seeder;
use Database\Seeders\CourtierTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CourtierTableSeeder::class);
        // Courtier::factory(5)->create();
        //$this->call(CommissionsTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);

        
    }
}
