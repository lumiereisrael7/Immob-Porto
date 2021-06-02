<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Immob Porto</title>
        <meta name="description" content="Bienvenue chez ImmobPorto, forts de nos 15 ans d'expérience nous nous assurons de trouver LE bien qui vous convient">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="/apple-touch-icon.png"> <!-- For apple devices -->
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/ico" href="/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Prompt%7cOpen+Sans%7cReem+Kufi" rel="stylesheet">
        <script src="https://use.fontawesome.com/c6f237cddf.js"></script>
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!-- Start of the header -->
        <header id="#top">
            <!-- Back to top button -->
            <a href="#top" class="m-b-1"><i class="fa fa-arrow-up fa-lg hidden-sm-up pull-xs-right" aria-hidden="true"></i></a>
            <a href="#top" class="m-b-1 m-r-1"><i class="fa fa-arrow-up fa-2x hidden-sm-down pull-sm-right" aria-hidden="true"></i></a>

            <!-- Boxed layout inside the header -->
            <div class="container">
                <div class="row">
                    <!-- Left logo -->
                    <figure class="col-xs-2">
                        <img src="/apple-touch-icon.png" alt="logo ImmobPorto" class="img-fluid hidden-md-down">
                        <img src="/tile.png" alt="logo ImmobPorto" class="img-fluid hidden-xs-down hidden-lg-up">
                        <img src="/tile-wide.png" alt="logo ImmobPorto" class="img-fluid hidden-sm-up">
                    </figure>
                    <aside><h3>IMMOB-PORTO</h3></aside>
                    <!-- Main title on the right -->
                    <aside class="col-xs-7 text-xs-right">
                        <h1>Des experts à votre service</h1>
                    </aside>
                </div>
            </div>
        </header>

          <!-- Start of the navigation -->
          <nav>
            <!-- Personnal space icon -->
            @auth
                <a href="/deconnexion" >
                    <aside class="pull-xs-right m-r-2" id="personal_space">
                        <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
                        <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
                        <span>Se <br> Déconnecter</span>
                    </aside>
                </a>

                <a href="/mon-compte">
                    <aside class="pull-xs-right m-r-2" id="personal_space">
                        <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
                        <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
                        <span>Espace<br>personnel</span>
                    </aside>
                </a>
            @else
                <div class="pull-xs-right m-r-2" id="personal_space">
                    <ul class="nav navbar-nav">
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="/connexion">Se connecter</a>
                        </li>
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="/inscription">S'inscrire</a>
                        </li>
                    </ul>
                </div>
            @endif
            <!-- Navigation -->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
        </button>



        @yield('mainpage')

        <!--

~~~~~~~~~Start of the footer~~~~~~~~~~~~~

        -->

        <footer class="m-t-3">
            <!-- Start of the section -->
            <section class="container p-t-1 p-x-1 text-xs-center">
                <h4>ImmobPorto en bref</h4>
                <p>ImmobPorto c'est une agences qui vous aide dans l'immobilier et est toujours à votre service</p>
                <!-- Footer navigation -->
                <nav class="row">
                    <ul class="nav navbar-nav text-xs-center col-xs-9">
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="{{route('accueil')}}">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="{{route('achat')}}">Achat</a>
                        </li>
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="{{route('location')}}">Location</a>
                        </li>
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="{{route('presentation')}}">Présentation</a>
                        </li>
                        <li class="nav-item m-x-1">
                            <a class="nav-link" href="{{route('contact')}}">Nous contacter</a>
                        </li>
                    </ul>
                    <!-- Social medias icons -->
                    <figure class="col-xs-3 m-t-1">
                        <a href="https://www.facebook.com/lumiere.israel.5/" target="_blank">
                            <i class="fa fa-facebook-official fa-2x m-r-1" aria-hidden="true"></i>
                        </a>
                    </figure>
                </nav>
                <!-- Copyright paragraphe -->
                <p>ImmobPorto 2021. &copy;Une réalisation <a href="https://github.com/lumiereisrael7" target="_blank">Lumière Israël</a> Template disponible sur <a href="http://https://github.com/thomgo/agence_immobili-re" target="_blank">github</a> </p>
            </section>
        </footer>

        <!--

        ~~~~~~~~~End of the footer~~~~~~~~~~~~~

        -->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    </body>
  </html>

