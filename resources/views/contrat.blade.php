@extends('layouts.app2')
@section('contenu')
    <h1>Contrat</h1>
    <a  class="btn btn-info mt-5" href={{route('contratForm')}}>Ajouter un nouveau contrat</a>
    <div class="table-responsive h-100 mt-7 " style=" display:block;">
     <table class="table table-bordered border-grey  table-over table-fixed table-sm text-light bg-dark mx-3 my-3 " >
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">renouvelable</th>
           <th scope="col">Etat</th>
           <th scope="col">Pptions</th>
           <th scope="col">Couverture</th>
           <th scope="col">Date de début </th>
           <th scope="col">Date de fin </th>
           {{-- <th scope="col">Courtier associé </th> --}}
           <th scope="col">Action</th>

         </tr>
       </thead>
       <tbody class="text-light bg-dark table-group-divider">
          @foreach($contrats as $contrat)
         <tr>
           <td>{{{$loop->index+1}}}</td>
           <td>{{$contrat->renouvelable}}</td>
           <td>{{$contrat->etat}}</td>
           <td>{{$contrat->options}}</td>
           <td>{{$contrat->couverture}}</td>
           <td>{{$contrat->dateDebut}}</td>
           <td>{{$contrat->dateFin}}</td>
           {{-- <td>{{$contrat->courtier->nom}} {{$contrat->courtier->prenom}}</td> --}}
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