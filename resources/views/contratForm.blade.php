@extends('layouts.app3')
@section('forms')

@if(session()->has("success"))
<div class="alert alert-succes"> {{session()->get('success')}}</div> 

@endif 

  <form method="post" action={{route('contratForm')}}>
    @csrf
    {{-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
    <h1 class='mb-0 fw-bold'>AssureTout</h1>
    <h2 class="h4 mb-3 fw-normal">Formulaire - Contrat</h2>

    <div class=" my-2 row" >
      <label class="my-2" for="floatingInput" >Renouvelable</label>
        <select name="renouvelable" >
          <option>---</option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
        
    </div>
    
    
    <div class=" my-2 row">
      <label class=" my-2" for="etat">Etat</label>
      <select name="etat"    >
        <option>---</option>
        <option value="actif">Actif</option>
        <option value="inactif">Inactif</option>
    </select>
  
    </div>
    <div class="form-floating my-2">
      <input type="text" class="form-control text-bg-dark"  name="options" >
      <label for="options">Options</label>
    </div>
    <div class="form-floating my-2">
      <input type="text" class="form-control text-bg-dark"  name="couverture" >
      <label for="couverture">Couverture</label>
    </div>
    <div class="form-floating my-2">
      <input type="text"    pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name='dateDebut' class="form-control text-bg-dark"  >
      <label for="floatingPassword">Date de debut AAAA-MM-JJ</label>
    </div>
    <div class="form-floating my-2">
      <input type="text"   pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name="dateFin"  class="form-control text-bg-dark" >
      <label for="dateFin">Date de fin AAAA-MM-JJ</label>
    </div>
    <input type="hidden"   value="1" name="courtier_id" class="form-control text-bg-dark" >
    
    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se
      </label>
    </div> --}}
    <div>
      <button class="w-40 btn btn-lg  btn-light" type="submit">Valider</button>
      <a class="w-40 btn btn-lg  btn-danger" hrf={{route('contrat')}}>Annuler</a>
    </div>
    
    <p class="mt-5 mb-3 text-muted">&copy; AssureTout - extranet</p>
  </form>
@endsection