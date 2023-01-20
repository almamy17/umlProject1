<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Contrat;
use App\Models\Sinistre;
use App\Models\Promotion;
use App\Models\Commission;
use Illuminate\Http\Request;


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
    public function afficherConnexion(){
        return view('login');
    }
    public function afficherContrat(){
        $contrats=Contrat::get();
        return view('contrat',compact("contrats"));
    }
    public function afficherFormContrat(){
        return view('contratForm');
    }
    public function storeContrat(Request $request){
        Contrat::create([
            "renouvelable"=>$request->renouvelable,
            "etat"=>$request->etat,
            "options"=>$request->options,
            "couverture"=>$request->couverture,
            "dateDebut"=>$request->dateDebut,
            "dateFin"=>$request->dateFin,
            "courtier_id"=>(int)$request->courtier_id,
        ]);
        return back()->with('success','Contrat créé avec succès');
    }

    public function afficherSinistre(){
        $sinistres=Sinistre::get();
        return view('sinistre',compact('sinistres'));
    }
    public function afficherDevis(){
        $devis=Devis::get();
        return view('devis',compact("devis"));
    }
}

 