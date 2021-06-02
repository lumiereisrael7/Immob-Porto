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
            <li class="nav-item m-x-1">
                <a class="nav-link" href="{{route('presentation')}}">Présentation</a>
            </li>
            <li class="nav-item m-x-1 on">
                <a class="nav-link" href="{{route('contact')}}">Nous contacter<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<!-- End of the navigation -->

<!-- Main content -->
<div style="width:400px;margin:0 auto;margin-top:10%;">
    <!-- zone de connexion -->

    <form action="/contact" method="POST">
        <div style="width:100%;padding: 30px;border: 5px solid #883f70;background: #fff;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
            <h1 style="margin: 0 auto;padding-bottom: 10px; text-align: center">Contactez nous</h1>
            <br>
            <label><b>Nom</b></label>
            <input type="text" placeholder="Entrer votre nom" name="nom" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>

            <label><b>Email</b></label>
            <input type="email" placeholder="Entrez votre email" name="email" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>

            <label><b>Message</b></label>
            <input type="text" placeholder="Votre message" name="message" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>

            {{ csrf_field() }}

            <input type="submit" id='submit' value='Envoyer' style="background-color: #1d1a1c;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 100%;">
        </div>
    </form>
</div>

@endsection
