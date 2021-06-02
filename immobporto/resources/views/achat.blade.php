@extends('layout')

@section('mainpage')
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav">
                <li class="nav-item m-x-1">
                    <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
                </li>
                <li class="nav-item m-x-1 on">
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
        </div>
    </nav>

<!-- End of the navigation -->


            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div>
                <!-- Start of the jumbotron with main image -->
<div class="jumbotron p-t-1 text-xs-center">
    <span class="pull-xs-right appeal landing">Vous aussi trouvez votre place !</span>
  </div>
  <!-- End of the jumbotron with main image -->

  <!--

  ~~~~~~~~~End of the top head content~~~~~~~~~~~~~

  -->

  <!--

~~~~~~~~~Start of the main content~~~~~~~~~~~~~

-->

<!-- Start of section with boxed content -->
<section class="container">

    <h2>Acheter en toute sécurité</h2>
    <p>Acheter une maison ou un appartement est souvent un grand pas, l'événement d'une vie, en passant par notre agence, nos experts s'assureront de trouver
    le logements qui correspond le mieux à vos besoins et à votre budget. Passer par Lille Immo, c'est l'assurance d'être accompagné tout
  au long de sa démarche par des professionnel compétent et ainsi faire le bon choix. N'hésitez pas à regarder nos biens à la ventes !</p>

  <!-- Top green bar with search form -->
    <div class="container-fluid top_search p-x-1 p-y-1 m-b-3">

      <form>
        <div class="form-group m-x-1">
          <select class="form-control">
            <option>-Bien recherché-</option>
            <option>Maison</option>
            <option>Appartement</option>
            <option>Studio</option>
            <option>Loft</option>
            <option>Villa</option>
          </select>
        </div>
        <div class="form-group m-x-1">
          <select class="form-control">
            <option>-Surface-</option>
            <option>- de 50m2</option>
            <option> 50 - 70 m2</option>
            <option> 70 - 100 m2</option>
            <option> 100 - 150 m2</option>
            <option> 150 - 200 m2</option>
            <option> + de 200 m2</option>
          </select>
        </div>
        <div class="form-group m-x-1">
          <input class="form-control" type="text" placeholder="Ville(s)">
        </div>
        <div class="form-group m-x-1">
          <select class="form-control">
            <option>-Votre budget-</option>
            <option>- 100 000</option>
            <option>100 à 120 000</option>
            <option>120 à 150 000</option>
            <option>150 à 200 000</option>
            <option>200 à 300 000</option>
            <option>300 à 400 000</option>
            <option>400 à 500 000</option>
            <option>+ 500 000</option>
          </select>
        </div>
        <div class="form-group m-x-1">
          <select class="form-control">
            <option>-Extérieur-</option>
            <option>Jardin</option>
            <option>Balcon</option>
            <option>Indifférent</option>
          </select>
        </div>
      </form>
      <button type="submit" class="btn" id="find_button">Trouver mon bien</button>

    </div>

  <!-- Cards search results -->
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">T4 arboré</h4>
            <h6 class="card-subtitle">Croix, 180 000 euros</h6>
          </div>
          <figure>
            <img src="img/apartement_small.jpg" class="img-fluid hidden-sm-up" alt="appartement à vendre">
            <img src="img/apartement_medium.jpg" class="img-fluid hidden-xs-down hidden-lg-up" alt="appartement à vendre">
            <img src="img/apartement_large.jpg" class="img-fluid hidden-md-down" alt="appartement à vendre">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Bel appartement de charme avec une vue exceptionnel sur l'hippodrome, proche commodités et transports.</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  2 chambres</span>
              <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Balcon</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
            </figure>
            <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
          </div>
        </article>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">Belle maison</h4>
            <h6 class="card-subtitle">Comines, 210 000 euros</h6>
          </div>
          <figure>
            <img src="img/house_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
            <img src="img/house_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
            <img src="img/house_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille.</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  3 chambres</span>
              <span><i class="fa fa-tree" aria-hidden="true"></i>  Jardin</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
            </figure>
            <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
          </div>
        </article>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">Loft d'artiste</h4>
            <h6 class="card-subtitle">Roubaix, 250 000 euros</h6>
          </div>
          <figure>
            <img src="img/loft_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
            <img src="img/loft_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
            <img src="img/loft_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Ce loft fraîchement rénové vous offre plus de 200 m2 d'une surface agréable à vivre en toute saison. Un must !</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  4 chambres</span>
              <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Terrasse</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   3 SDB</span>
            </figure>
            <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
          </div>
        </article>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">T4 arboré</h4>
            <h6 class="card-subtitle">Croix, 180 000 euros</h6>
          </div>
          <figure>
            <img src="img/apartement_small.jpg" class="img-fluid hidden-sm-up" alt="appartement à vendre">
            <img src="img/apartement_medium.jpg" class="img-fluid hidden-xs-down hidden-lg-up" alt="appartement à vendre">
            <img src="img/apartement_large.jpg" class="img-fluid hidden-md-down" alt="appartement à vendre">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Bel appartement de charme avec une vue exceptionnel sur l'hippodrome, proche commodités et transports.</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  2 chambres</span>
              <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Balcon</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
            </figure>
            <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
          </div>
        </article>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">Belle maison</h4>
            <h6 class="card-subtitle">Comines, 210 000 euros</h6>
          </div>
          <figure>
            <img src="img/house_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
            <img src="img/house_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
            <img src="img/house_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille.</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  3 chambres</span>
              <span><i class="fa fa-tree" aria-hidden="true"></i>  Jardin</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
            </figure>
            <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
          </div>
        </article>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">Loft d'artiste</h4>
            <h6 class="card-subtitle">Roubaix, 250 000 euros</h6>
          </div>
          <figure>
            <img src="img/loft_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
            <img src="img/loft_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
            <img src="img/loft_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Ce loft fraîchement rénové vous offre plus de 200 m2 d'une surface agréable à vivre en toute saison. Un must !.</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  4 chambres</span>
              <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Terrasse</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   3 SDB</span>
            </figure>
            <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
          </div>
        </article>
      </div>

    </div>

  </section>


  <!--

  ~~~~~~~~~End of the main content~~~~~~~~~~~~~

  -->

@endsection
