<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;

class AuthenticationController extends Controller
{
    public function afficherConnexion(){
        return view('login');
    }

    public function connectUser( Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('activites');
        }

        return redirect()->back()->withErrors('Les informations de connexion saisies ne sont pas correctes');
    }

    public function disconnectUser()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
