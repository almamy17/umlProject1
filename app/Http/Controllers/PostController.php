<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Commission;

class PostController extends Controller{

 public function afficherAccueil(){        
        return view('accueil');
    }
    public function afficherAbout(){        
        return view('about');
    }

    public function afficherContact(){
        return view('contact');
    }

    public function afficherActivites(){
        return view('activites');
    }
    public function afficherCommissions(){
        $commissions=Commission::get();
        return view('commissions',compact("commissions"));
    }
    public function afficherPromotions(){
        $promotions=Promotion::get();
        return view('promotions',compact("promotions"));
    }

    public function afficherContrat(){
        return view('contrat');
    }
    public function afficherSinistre(){
        return view('sinistre');
    }
    public function afficherDevis(){
        return view('devis');
    }
}

 