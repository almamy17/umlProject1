@extends('layouts.app2')
@section('contenu')
    <h1>Contrat</h1>
    <a href="" class="btn btn-info mt-5">Ajouter un nouveau contrat</a>
    <div class="table-responsive h-100 mt-7 " style=" display:block;">
     <table class="table table-bordered border-grey  table-over table-fixed table-sm text-light bg-dark mx-3 my-3 " >
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Nom</th>
           <th scope="col">Description</th>
           <th scope="col">Avantage</th>
           <th scope="col">Statut</th>
           <th scope="col">Date de début </th>
           <th scope="col">Date de fin </th>
           <th scope="col">Action</th>

         </tr>
       </thead>
       <tbody class="text-light bg-dark table-group-divider">
         <tr>
           <td>1,001</td>
           <td>random</td>
           <td>data</td>
           <td>placeholder</td>
           <td>text</td>
           <td>text</td>
           <td>text</td>
           <td>
               <a href="" ><i class="bi-pencil-square" style="font-size: 1.2rem; color: green;"></i></a>
               <a href=""><i class="bi-x-circle-fill" style="font-size: 1.2rem; color: red;"></i></a>
          </td>
         </tr>
        
       </tbody>
     </table>
   </div>
   
@endsection