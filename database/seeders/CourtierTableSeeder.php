<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("courtiers")->insert([
            ["nom"=>"Doukouré","prenom"=>"Almamy","email"=>"almamdoukoure@gmail.com","telephone"=>"0757558141","adresse"=>"INPHB-CENTRE","ventes"=>55],
            ["nom"=>"Dro","prenom"=>"Chris","email"=>"dro.chris20@inphb.ci","telephone"=>"0708588123","adresse"=>"INPHB-CENTRE","ventes"=>100],
            ["nom"=>"Allou","prenom"=>"Daniel","email"=>"allou.daniel18@inphb.ci","telephone"=>"0545892328","adresse"=>"INPHB-CENTRE","ventes"=>20]
        ]);
    }
}
