@extends('layouts.app2')
@section('contenu')
    
<h1>Devis</h1>
<a href="" class="btn btn-info mt-5">Ajouter un nouveau devis</a>
    <div class="table-responsive h-100 mt-7 " style=" display:block;">
     <table class="table table-bordered border-grey  table-over table-fixed table-sm text-light bg-dark mx-3 my-3 " >
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Nom du client</th>
           <th scope="col">Montant</th>
           <th scope="col">Produit</th>
           <th scope="col">Statut</th>
           <th scope="col">Date de créaction </th>
           <th scope="col">Durée </th>
           {{-- <th scope="col">Courtier associé </th> --}}
           <th scope="col">Actions </th>
          

         </tr>
       </thead>
       <tbody class="text-light bg-dark table-group-divider">
          @foreach($devis as $devi)
         <tr>
           <td>{{$loop->index+1}}</td>
           <td>{{$devi->nomClient}}</td>
           <td>{{$devi->montant}}</td>
           <td>{{$devi->produit}}</td>
           <td>{{$devi->statutDevis}}</td>
           <td>{{$devi->dateCreation}}</td>
           <td>{{$devi->duree}}</td>
           {{-- <td>{{$devi->courtier->nom}} {{$devi->courtier->prenom}}</td> --}}
           <td>
               <a href="" ><i class="bi-pencil-square" style="font-size: 1.2rem; color: green;"></i></a>
               <a href=""><i class="bi-x-circle-fill" style="font-size: 1.2rem; color: red;"></i></a>
          </td>
         </tr>
        @endforeach
       </tbody>
     </table>
   </div>
   
@endsection