<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContratTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contrats")->insert([
            ["renouvelable"=>"oui","etat"=>"actif","options"=>"fFoudre","couverture"=>"Au tiers","dateDebut"=>now(),"courtier_id"=>3],
            ["renouvelable"=>"non","etat"=>"actif","options"=>"Brise-glace","couverture"=>"Tout risque","dateDebut"=>now(),"courtier_id"=>1],
            ["renouvelable"=>"oui","etat"=>"actif","options"=>"Paramédicale","couverture"=>"100%","dateDebut"=>now(),"courtier_id"=>8],
            
        ]);
    }
}
