<?php

namespace Database\Seeders;

use App\Models\Courtier;
use Illuminate\Database\Seeder;
use Database\Seeders\DevisTableSeeder;
use Database\Seeders\ContratTableSeeder;
use Database\Seeders\CourtierTableSeeder;
use Database\Seeders\SinistreTableSeeder;
use Database\Seeders\PromotionsTableSeeder;

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
        //$this->call(PromotionsTableSeeder::class);
        //$this->call(DevisTableSeeder::class);
        //$this->call(SinistreTableSeeder::class);
        $this->call(ContratTableSeeder::class);

        
    }
}
