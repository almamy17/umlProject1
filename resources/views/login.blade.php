<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Allou Daniel, Doukouré Almamy, and Dro Chris">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href={{asset("css/bootstrap.min.css")}} rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
{{-- <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9"> --}}


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href={{asset('css/sign-in.css')}} rel="stylesheet">
  </head>
  <body class=" d-flex  h-100 text-center text-bg-dark">
    
<main class="form-signin w-100 m-auto">
  <form action="{{ route('authenticate') }}" method="post">
    @csrf
    {{-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
    <h1 class='mb-0 fw-bold'>AssureTout</h1>
    <h2 class="h4 mb-3 fw-normal">Connexion - extranet</h2>

    <div class="form-floating ">
      <input type="email" name="email" class="form-control text-bg-dark" id="floatingInput" placeholder="konan@assuretout.com" required>
      <label for="floatingInput">Adresse courriel</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control text-bg-dark" id="floatingPassword" placeholder="Mot de passe" required>
      <label for="floatingPassword">Mot de passe</label>
    </div>

    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se
      </label>
    </div> --}}
    <button class="w-100 btn btn-lg  btn-light" type="submit">Se connecter</button>
    <p class="mt-5 mb-3 text-muted">&copy; AssureTout - extranet</p>
  </form>
</main>


    
  </body>
</html>