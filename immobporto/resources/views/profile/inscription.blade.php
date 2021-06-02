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
        <li class="nav-item m-x-1">
            <a class="nav-link" href="{{route('contact')}}">Nous contacter</a>
        </li>
    </ul>
</div>
</nav>
<!-- End of the navigation -->

<!-- Main content -->
<div style="width:400px;margin:0 auto;margin-top:3%;">
    <!-- zone de connexion -->

    <form action="/inscription" method="POST">

        <div style="width:100%;padding: 30px;border: 5px solid #883f70;background: #fff;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
            <h1 style="width: 38%;margin: 0 auto;padding-bottom: 10px; text-align: center">Inscription</h1>

            <label><b>Nom</b>
            </label><input type="text" placeholder="Entrer votre nom" name="nom" value="{{ old('nom') }}" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('nom'))
                <p class=".is-invalid"> {{ $errors->first('nom') }} </p>
            @endif

            <label><b>Prénom</b>
            </label><input type="text" placeholder="Entrer votre prénom" name="prenom" value="{{ old('prenom') }}" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('prenom'))
                <p class=".is-invalid"> {{ $errors->first('prenom') }} </p>
            @endif

            <label><b>Email</b>
            </label><input type="email" placeholder="Entrer votre e-mail" name="email" value="{{ old('email') }}" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('email'))
                <p class=".is-invalid"> {{ $errors->first('email') }} </p>
            @endif

            <label><b>Numéro de Télephone</b></label>
            <input type="tel" placeholder="Entrez votre numero de Telephone" name="tel" value="{{ old('tel') }}" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('tel'))
                <p class=".is-invalid"> {{ $errors->first('tel') }} </p>
            @endif

            <label><b>Votre adresse</b></label>
            <input type="text" placeholder="Entrez votre adresse" name="adresse" value="{{ old('adresse') }}" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('adresse'))
                <p class=".is-invalid"> {{ $errors->first('adresse') }} </p>
            @endif

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('password'))
                <p class=".is-invalid"> {{ $errors->first('password') }} </p>
            @endif

            <label><b>Confirmation mot de passe</b></label>
            <input type="password" placeholder="Confirmer votre mot de passe" name="password_confirmation" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            @if ($errors->has('password_confirmation'))
                <p class=".is-invalid"> {{ $errors->first('password_confirmation') }} </p>
            @endif

            @csrf

            <input type="submit" id='submit' value="m'inscrire" style="background-color: #1d1a1c;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 100%;">

            <p>Vous avez déjà un compte? <a href="/connexion">Connectez-vous</a></p>
        </div>
    </form>
</div>
@endsection
