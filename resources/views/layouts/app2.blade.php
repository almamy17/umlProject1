<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Projet d'UML 2022-2023">
    <meta name="author" content="Allou Daniel, Doukouré Almamy, and Dro Chris">
    <meta name="generator" content="Hugo 0.108.0">
    <title>AssureTout - Accueil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">





    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
    <link href={{ asset('css/cover.css') }} rel="stylesheet">
    <link href={{ asset('css/sidebars.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{asset("bootstrap-icons/font/bootstrap-icons.css")}}>
</head>

<body class="d-flex  h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-80  p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h2 class="float-md-start mb-0">AssureTout</h2>
                <nav class="nav nav-masthead justify-content-center float-md-center" id="navbar">
                    @if(strpos(url()->current(), "accueil") !== false)
                    <a class="nav-item nav-link fw-bold py-1 px-0 mx-1 active" data-anim='1'   href={{route('home')}}>Accueil</a>
                    @else
                    <a class="nav-item nav-link fw-bold py-1 px-0 mx-1 " data-anim='1'   href={{route('home')}}>Accueil</a>
                    @endif
                    @if(strpos(url()->current(), "promotions") !== false)
                    <a class=" nav-item nav-link fw-bold py-1 px-0 mx-1 active" data-anim='2'  href={{route('promotions')}}>Promotions</a>
                    @else
                    <a class=" nav-item nav-link fw-bold py-1 px-0 mx-1" data-anim='2'  href={{route('promotions')}}>Promotions</a>
                    @endif
                    @if(strpos(url()->current(), "commissions") !== false)
                    <a class=" nav-item nav-link fw-bold py-1 px-0 mx-1 active" data-anim='3' href={{route('commissions')}}>Commissions</a>
                    @else
                    <a class=" nav-item nav-link fw-bold py-1 px-0 mx-1 " data-anim='3' href={{route('commissions')}}>Commissions</a>
                    @endif
                    @if(strpos(url()->current(), "activites") !== false)
                    <a class="nav-item nav-link fw-bold py-1 px-0 mx-1 active" data-anim='4' href={{route('activites')}}>Activités</a>
                    @else
                    <a class="nav-item nav-link fw-bold py-1 px-0 mx-1 " data-anim='4' href={{route('activites')}}>Activités</a>
                    @endif
                    @if(strpos(url()->current(), "about") !== false)
                    <a class="nav-item nav-link fw-bold py-1 px-0 active mx-1" data-anim='5' href={{route('about')}}>Qui sommes nous?</a>
                    @else
                    <a class="nav-item nav-link fw-bold py-1 px-0 mx-1" data-anim='5' href={{route('about')}}>Qui sommes nous?</a>
                    @endif
                    @if(strpos(url()->current(), "contact") !== false)
                    <a class="nav-item nav-link fw-bold py-1 px-0 active mx-1" data-anim='6' href={{route('contact')}}>Contacter nous</a>
                    @else
                    <a class="nav-item nav-link fw-bold py-1 px-0 mx-1" data-anim='6' href={{route('contact')}}>Contacter nous</a>
                    @endif
                </nav>
                <div class="dropdown float-md-end">
                        @auth
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>{{ auth()->user()->name }}</strong>
                        </a>
                        @endauth
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                        @auth
                        <li>
                        <a class="dropdown-item" href="#" onclick="document.getElementById('deconnexion').submit()">
                            <form action={{ route('logout') }} id="deconnexion" method="post">@csrf</form>
                        Déconnexion</a></li>
                        @endauth
                    </ul>
                  </div>
            </div>
           
        </header>

        <main class="px-3">
            @yield('contenu')
        </main>

        <footer class="mt-auto text-white-50">
            <p>Page officielle <a href="#" class="text-white">AssureTout</a>.</p>
        </footer>
    </div>
    <script src={{asset("js/bootstrap.bundle.min.js")}}></script>
    
</body>

</html>
