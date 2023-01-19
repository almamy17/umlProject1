<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("commissions")->insert([
            ["taux"=>15.8,"montant"=>150000,"datePaiement"=>now(),"typeProduit"=>"Assurance mobilier","courtier_id"=>1],
            ["taux"=>10.2,"montant"=>285000,"datePaiement"=>now(),"typeProduit"=>"Assurance immobilier","courtier_id"=>5],
            ["taux"=>5,"montant"=>100500,"datePaiement"=>now(),"typeProduit"=>"Assurance santé","courtier_id"=>3],
            
        ]);
    }
}
