@extends('layouts.app2')
@section('contenu')
    
   <h1>Contacter nous</h1>
   <div class="container px-2 py-2" id="icon-grid">
      
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5 justify-content-center">
        <div class="col d-flex align-items-start mx-2">
         <i class="bi-envelope-at-fill" style="font-size: 2rem; color: white;"></i>
          <div class='mx-1'>
            <h3 class="fw-bold mb-0 fs-4">E-mail</h3>
            <p>service.mail@assuretout.ci</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
         <i class="bi-facebook" style="font-size: 2rem; color: white;"></i>
          <div class='mx-1'>
            <h3 class="fw-bold mb-0 fs-4">Facebook</h3>
            <p>fb.assureTout</p>
          </div>
        </div>
        <div class="col d-flex align-items-start ">
         <i class="bi-linkedin" style="font-size: 2rem; color: white;"></i>
          <div class='mx-1'>
            <h3 class="fw-bold mb-0 fs-4">Linkedin</h3>
            <p>in.assureTout</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
         <i class="bi-whatsapp" style="font-size: 2rem; color: white;"></i>
         <div class='mx-1'>
           <h3 class="fw-bold mb-0 mx-0 fs-4">Whatsapp</h3>
           <p>wa.me/070707000</p>
         </div>
       </div>
       
      </div>
    </div>
@endsection