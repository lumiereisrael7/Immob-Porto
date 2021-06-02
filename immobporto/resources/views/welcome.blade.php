@extends('layout')

@section('mainpage')
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav">
                <li class="nav-item m-x-1 on">
                    <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
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
        </div>
    </nav>

<!-- End of the navigation -->

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

  <!-- Boxed layout for the main content -->
  <section class="container">

  <h2 class="m-b-1">Nos coups de coeur !</h2>
    <!-- First section with the carousel and the search form -->
    <div class="row">

      <!-- Carousel -->
      <figure class="col-sm-12 col-lg-9 hidden-sm-down p-x-0">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3500">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="/img/salon_large.jpg" alt="salon d'un appartement en vente">
              <div class="carousel-caption">
                <h3>T2 Wambrechies</h3>
                <p>Beaux volumes, moderne, à ne pas manquer</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/interieur_large.jpg" alt="canapés dans un salon">
              <div class="carousel-caption">
                <h3>Maison flamande</h3>
                <p>Un bien d'exception au coeur de Lille</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </figure>

      <!-- Aside with the search form -->
      <aside class="col-xs-12 col-lg-3 p-y-2" id="search_form">
        <h3 class="m-b-1 text-xs-center"><i class="fa fa-search-plus" aria-hidden="true"></i>Vous recherchez</h3>

            <form action="/recherche" method="POST">
                <div class="form-group">
                    <select class="form-control" name="transaction">
                        <option>-Transaction-</option>
                        <option>Achat</option>
                        <option>Location</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="categorie">
                        <option>-Bien recherché-</option>
                        <option>Maison</option>
                        <option>Appartement</option>
                        <option>Studio</option>
                        <option>Loft</option>
                        <option>Villa</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Ville(s)" name="ville">
                </div>
                <div class="form-group">
                    <select class="form-control" name="budget">
                        <option>-Votre budget-</option>
                        <option value="100000">- 100 000</option>
                        <option value="120000">100 à 120 000</option>
                        <option value="150000">120 à 150 000</option>
                        <option value="200000">150 à 200 000</option>
                        <option value="300000">200 à 300 000</option>
                        <option value="300000">300 à 400 000</option>
                        <option value="">400 à 500 000</option>
                        <option>+ 500 000</option>
                    </select>
                </div>

                <button type="submit" class="btn" id="find_button">Trouver mon bien</button>
            </form>
        </aside>
    </div>

  </section>

  <!-- Second boxed section -->

  <section class="container m-t-2">

    <h3 class="m-b-2">Annonces à la une</h3>

  <!-- Start the card content -->
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-4">
        <article class="card">
          <div class="card-block text-xs-center head">
            <h4 class="card-title">Belle maison</h4>
            <h6 class="card-subtitle">Comines, 210 000 euros</h6>
          </div>
          <figure>
            <img src="/img/house_small.jpg" class="img-fluid hidden-sm-up" alt="maison bleu à vendre">
            <img src="/img/house_medium.jpg" class="img-fluid hidden-xs-down hidden-lg-up" alt="maison bleue à vendre">
            <img src="/img/house_large.jpg" class="img-fluid hidden-md-down" alt="maison bleu à vendre">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille</p>
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
            <h4 class="card-title">Belle maison</h4>
            <h6 class="card-subtitle">Comines, 210 000 euros</h6>
          </div>
          <figure>
            <img src="/img/house_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
            <img src="/img/house_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
            <img src="/img/house_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille</p>
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
            <h4 class="card-title">Belle maison</h4>
            <h6 class="card-subtitle">Comines, 210 000 euros</h6>
          </div>
          <figure>
            <img src="/img/house_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
            <img src="/img/house_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
            <img src="/img/house_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
          </figure>
          <div class="card-block text-xs-center">
            <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille</p>
            <figure class="description">
              <span><i class="fa fa-bed" aria-hidden="true"></i>  3 chambres</span>
              <span><i class="fa fa-tree" aria-hidden="true"></i>  Jardin</span>
              <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
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
</div>

@endsection
