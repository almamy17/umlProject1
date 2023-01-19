@extends('layouts.app2')
@section('contenu')

   <h1>Promotions </h1>
   <div class="table-responsive h-100 mt-7" style=" display:block;">
      <table class="table table-bordered border-grey  table-over table-fixed table-sm text-light bg-dark mx-3 my-3 " >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom de Promotion</th>
            <th scope="col">Description</th>
            <th scope="col">Avantage</th>
            <th scope="col">Date de début </th>
            <th scope="col">Date de fin </th>
            <th scope="col">Courtier associé </th>
          </tr>
        </thead>
        <tbody class="text-light bg-dark table-group-divider">
         @foreach($promotions as $promotion)
         <tr>
           <td>{{$loop->index+1}}</td>
           <td>{{$promotion->nomProm}}</td>
           <td>{{$promotion->description}}</td>
           <td>{{$promotion->avantage}}</td>
           <td>{{$promotion->dateDebut}}</td>
           <td>{{$promotion->dateFin}}</td>
           <td>{{$promotion->courtier->nom}} {{$promotion->courtier->prenom}}</td>
         </tr>
         @endforeach
         
        </tbody>
      </table>
    </div>
@endsection