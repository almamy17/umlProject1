@extends('layouts.app2')
@section('contenu')
    <div class="container px-4 py-5" id="custom-cards">
     <h1>Les activités</h1>
 
     <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
       <div class="col">
         <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/contrat.jpg'); background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
             <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href={{route('contrat')}}>Contrats</a></h3>
             <ul class="d-flex list-unstyled mt-auto">
               <li class="me-auto">
                 <img src={{asset('img/contrat.jpg')}} alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
               </li>
             </ul>
           </div>
         </div>
       </div>
 
       <div class="col">
         <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/sinistre.jpg'); background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href={{route('sinistre')}}>Sinistres</a></h3>
             <ul class="d-flex list-unstyled mt-auto">
               <li class="me-auto">
                 <img src={{asset('img/sinistre.jpg')}} alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
               </li>
             </ul>
           </div>
         </div>
       </div>
 
       <div class="col">
         <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/devis.jpg'); background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
             <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href={{route("devis")}}>Devis</a></h3>
             <ul class="d-flex list-unstyled mt-auto">
               <li class="me-auto">
                 <img src={{asset('img/devis.jpg')}} alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 
   
@endsection