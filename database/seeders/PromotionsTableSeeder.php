<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("promotions")->insert([
            ["nomProm"=>"ScolarDeal","description"=>"pour  la scolarité des enfants sur 10ans","avantage"=>"Ecomnomique","dateDebut"=>now(),"dateDebut"=>'2023-12-05',"courtier_id"=>2],
            ["nomProm"=>"FunebPlus","description"=>"pour les funerailles ","avantage"=>"Ecomnomique","dateDebut"=>now(),"courtier_id"=>3],
            ["nomProm"=>"MotoAssur","description"=>"pour les motocycliste","avantage"=>"Ecomnomique","dateDebut"=>now(),"courtier_id"=>6],
            
        ]);
    }
}
