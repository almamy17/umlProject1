@extends('layouts.app2')
@section('contenu')
    
   <h1>Les Commissions</h1>
   <div class="table-responsive h-100 mt-7" style=" align-text:left;display:block;">
     <table class="table table-bordered border-grey  table-over table-fixed table-sm text-light bg-dark mx-3 my-3 " >
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Taux</th>
           <th scope="col">Montant</th>
           <th scope="col">Type de produit </th>
           <th scope="col">Date de paiement </th>
           <th scope="col">Courtier associé </th>
         </tr>
       </thead>
       <tbody class="text-light bg-dark table-group-divider">
         @foreach($commissions as $commission)
         <tr>
           <td>{{$loop->index+1}}</td>
           <td>{{$commission->taux}}</td>
           <td>{{$commission->montant}}</td>
           <td>{{$commission->typeProduit}}</td>
           <td>{{$commission->datePaiement}}</td>
           <td>{{$commission->courtier->nom}} {{$commission->courtier->prenom}}</td>
         </tr>
         @endforeach
      
       </tbody>
     </table>
   </div>
@endsection