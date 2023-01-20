<?php

namespace App\Models;

use App\Models\Courtier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable=["renouvelable","options","etat","dateFin","dateDebut","courtier_id"];
    public function courtier(){
        return $this->belongsTo(Courtier::class);
    }
}
