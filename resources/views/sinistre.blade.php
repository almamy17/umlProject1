@extends('layouts.app2')
@section('contenu')
    
<h1>Sinistres</h1>
<a href="" class="btn btn-info mt-5">Ajouter un nouveau sinistre</a>
    <div class="table-responsive h-100 mt-7 " style=" display:block;">
     <table class="table table-bordered border-grey  table-over table-fixed table-sm text-light bg-dark mx-3 my-3 " >
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Nom du client</th>
           <th scope="col">type de sinistre</th>
           <th scope="col">Description</th>
           <th scope="col">Statut</th>
           <th scope="col">Date de sinistre </th>
           {{-- <th scope="col">Courtier associé </th> --}}
           <th scope="col">Actions </th>
          

         </tr>
       </thead>
       <tbody class="text-light bg-dark table-group-divider">
          @foreach($sinistres as $sinistre)
         <tr>
           <td>{{$loop->index+1}}</td>
           <td>{{$sinistre->nomClient}}</td>
           <td>{{$sinistre->typeSinistre}}</td>
           <td>{{$sinistre->description}}</td>
           <td>{{$sinistre->statutSinistre}}</td>
           <td>{{$sinistre->dateSinistre}}</td>
           {{-- <td>{{$sinistre->courtier->nom}} {{$sinistre->courtier->prenom}}</td> --}}
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