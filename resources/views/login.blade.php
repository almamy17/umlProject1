@extends('layouts.app3')
@section('forms')
  <form>
    {{-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
    <h1 class='mb-0 fw-bold'>AssureTout</h1>
    <h2 class="h4 mb-3 fw-normal">Connexion - extranet</h2>

    <div class="form-floating ">
      <input type="email" class="form-control text-bg-dark" id="floatingInput" placeholder="konan@assuretout.com" >
      <label for="floatingInput">Adresse courriel</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control text-bg-dark" id="floatingPassword" placeholder="Mot de passe" >
      <label for="floatingPassword">Mot de passe</label>
    </div>

    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se
      </label>
    </div> --}}
    <a class="w-100 btn btn-lg  btn-light" href={{route('home')}}>Se connecter</a>
    <p class="mt-5 mb-3 text-muted">&copy; AssureTout - extranet</p>
  </form>
@endsection