<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function afficherConnexion(){
        return view('login');
    }

    public function connectUser()
    {

    }

    public function disconnectUser()
    {

    }
}
