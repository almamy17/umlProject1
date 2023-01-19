<?php

namespace App\Models;

use App\Models\Courtier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commission extends Model
{
    use HasFactory;
    public function courtier(){
        return $this->belongsTo(Courtier::class);
    }
}
