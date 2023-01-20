<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("devis")->insert([
            ["nomClient"=>"Diomandé Saï","duree"=>90,"montant"=>156000,"dateCreation"=>now(),"statutDevis"=>"en cours", "produit"=>"Construction immobilier","courtier_id"=>5],
            ["nomClient"=>"N'Guessan Elielle","duree"=>120,"montant"=>2560000,"dateCreation"=>now(),"satutDevis"=>"terminé", "produit"=>"Achat d' immobilier","courtier_id"=>4],
            ["nomClient"=>"Koné Dimitri","duree"=>20,"montant"=>65000,"dateCreation"=>now(),"satutDevis"=>"non entammé", "produit"=>"Construction de moto","courtier_id"=>2],
            
        ]);
    }
}
