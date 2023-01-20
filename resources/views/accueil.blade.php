@extends('layouts.app2')
@section('contenu')
    <h1>AssureTout</h1>
    <p class="lead">Bienvenue sur le comparateur d’Assurance qui vous simplifie la vie. Obtenez votre Assurance simplement
        en quelques minutes ! </p>
    @guest
    <p class="lead">
        <a href={{asset('login')}} class="btn btn-lg btn-light fw-bold border-white bg-white">Se connecter</a>
    </p>  
    @endguest
@endsection
