<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreController extends Controller
{
    public function afficherArticles(){
        $title='Mon titre : Liste d\'articles';
        return view('articles',compact('title'));
    }
}
