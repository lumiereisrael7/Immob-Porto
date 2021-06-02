@extends('layout')

@section('mainpage')
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav">
                <li class="nav-item m-x-1">
                    <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
                </li>
                <li class="nav-item m-x-1">
                    <a class="nav-link" href="{{route('achat')}}">Achat</a>
                </li>
                <li class="nav-item m-x-1">
                    <a class="nav-link" href="{{route('location')}}">Location</a>
                </li>
                <li class="nav-item m-x-1 on">
                    <a class="nav-link" href="{{route('presentation')}}">Présentation</a>
                </li>
                <li class="nav-item m-x-1">
                    <a class="nav-link" href="{{route('contact')}}">Nous contacter</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- End of the navigation -->

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

<!-- Allow a boxed content -->
<div class="container">

    <!-- First section with the history of the agency -->
      <section class="clearfix">
        <h2 class="m-y-2">15 ans d'existence</h2>
        <article>
          <figure class="pull-sm-left">
            <img src="/img/director_small.jpg" alt="Marc Hess directeur de lille immo" class="img-fluid hidden-sm-up m-b-1">
            <img src="/img/director_medium.jpg" alt="Marc Hess directeur de lille immo" class="img-fluid hidden-xs-down hidden-lg-up m-r-1 m-b-1">
            <img src="/img/director_large.jpg" alt="Marc Hess directeur de lille immo" class="img-fluid hidden-md-down m-r-1 m-b-1">
            <figcaption class="figure-caption text-xs-center">Marc Hess directeur et fondateur.</figcaption>
          </figure>
          <h3>Une agence au service du client</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend eros urna, quis auctor justo porttitor non. Nullam dignissim blandit ligula, id gravida velit tempus sit amet. Mauris quis placerat tellus.
            Aenean blandit, orci ac hendrerit efficitur, erat lacus facilisis nisl, et blandit lorem odio vitae urna. Morbi nec massa at diam pretium venenatis a a odio. Curabitur molestie non justo ut pharetra.
            Fusce maximus gravida dapibus. Phasellus gravida aliquet risus eu viverra.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend eros urna, quis auctor justo porttitor non. Nullam dignissim blandit ligula, id gravida velit tempus sit amet. Mauris quis placerat tellus.
              Aenean blandit, orci ac hendrerit efficitur, erat lacus facilisis nisl, et blandit lorem odio vitae urna. Morbi nec massa at diam pretium venenatis a a odio. Curabitur molestie non justo ut pharetra.
              Fusce maximus gravida dapibus. Phasellus gravida aliquet risus eu viverra.</p>
        </article>
      </section>

    <!-- Second section with the values of the agency -->
        <section class="clearfix">
        <h2 class="m-y-2">Le bon logement pour la bonne personne</h2>
        <article>
          <figure class="pull-sm-right">
            <img src="/img/family_small.jpg" alt="Marc Hess directeur de lille immo" class="img-fluid hidden-sm-up m-b-1">
            <img src="/img/family_medium.jpg" alt="Marc Hess directeur de lille immo" class="img-fluid hidden-xs-down hidden-lg-up m-l-1 m-b-1">
            <img src="/img/family_large.jpg" alt="Marc Hess directeur de lille immo" class="img-fluid hidden-md-down m-l-1 m-b-1">
          </figure>
          <h3>Nos engagements</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend eros urna, quis auctor justo porttitor non. Nullam dignissim blandit ligula, id gravida velit tempus sit amet. Mauris quis placerat tellus.
            Aenean blandit, orci ac hendrerit efficitur, erat lacus facilisis nisl, et blandit lorem odio vitae urna. Morbi nec massa at diam pretium venenatis a a odio. Curabitur molestie non justo ut pharetra.
            Fusce maximus gravida dapibus. Phasellus gravida aliquet risus eu viverra.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend eros urna, quis auctor justo porttitor non. Nullam dignissim blandit ligula, id gravida velit tempus sit amet. Mauris quis placerat tellus.
              Aenean blandit, orci ac hendrerit efficitur, erat lacus facilisis nisl, et blandit lorem odio vitae urna. Morbi nec massa at diam pretium venenatis a a odio. Curabitur molestie non justo ut pharetra.
              Fusce maximus gravida dapibus. Phasellus gravida aliquet risus eu viverra.</p>
        </article>
      </section>

    <!-- Image gallery to present the lead team. External plugin, see yoxview plugin -->
      <section>
        <h2>Notre équipe dirigeante</h2>
        <p>Ceux sont eux, avec tant d'autres, qui font de Immob-Porto une agence d'exception au service de ses clients.</p>
        <figure class="yoxview gallery">
          <a href="/img/gallery/employe_un.jpg"><img src="/img/gallery/employe_un_thumbnail.jpg" alt="directeur commercial" title="Vincent Noeulin, directeur commercial" class="img-fluid hidden-md-down"/><img src="/img/gallery/employe_un_medium_thumbnail.jpg" alt="directeur commercial" title="Vincent Noeulin, directeur commercial" class="img-fluid hidden-xs-down hidden-lg-up"/><img src="/img/gallery/employe_un_small_thumbnail.jpg" alt="directeur commercial" title="Vincent Noeulin, directeur commercial" class="img-fluid hidden-sm-up"/></a>
          <a href="/img/gallery/employe_fem_un.jpg"><img src="/img/gallery/employe_fem_un_thumbnail.jpg" alt="responsable rh" title="Christine Bar, responsable RH" class="img-fluid hidden-md-down"/><img src="/img/gallery/employe_fem_un_medium_thumbnail.jpg" alt="responsable rh" title="Christine Bar, responsable RH" class="img-fluid hidden-xs-down hidden-lg-up"/><img src="/img/gallery/employe_fem_un_small_thumbnail.jpg" alt="responsable rh" title="Christine Bar, responsable RH" class="img-fluid hidden-sm-up"/></a>
          <a href="/img/gallery/employe_deux_full_medium.jpg"><img src="/img/gallery/employe_deux_thumbnail.jpg" alt="directeur" title="Louis Dupont créateur et fondateur de Lille Immo" class="img-fluid hidden-md-down"/><img src="/img/gallery/employe_deux_medium_thumbnail.jpg" alt="directeur" title="Louis Dupont créateur et fondateur de Lille Immo" class="img-fluid hidden-xs-down hidden-lg-up"/><img src="/img/gallery/employe_deux_small_thumbnail.jpg" alt="directeur" title="Louis Dupont créateur et fondateur de Lille Immo" class="img-fluid hidden-sm-up"/></a>
          <a href="/img/gallery/employe_fem_deux.jpg"><img src="/img/gallery/employe_fem_deux_thumbnail.jpg" alt="experte bien immobiliers" title="Sophie Duquenes, experte biens immobiliers" class="img-fluid hidden-md-down"/><img src="/img/gallery/employe_fem_deux_medium_thumbnail.jpg" alt="experte bien immobiliers" title="Sophie Duquenes, experte biens immobiliers" class="img-fluid hidden-xs-down hidden-lg-up"/><img src="/img/gallery/employe_fem_deux_small_thumbnail.jpg" alt="experte bien immobiliers" title="Sophie Duquenes, experte biens immobiliers" class="img-fluid hidden-sm-up"/></a>
        </figure>
      </section>


    </div>


    <!--

    ~~~~~~~~~End of the main content~~~~~~~~~~~~~

    -->

@endsection
