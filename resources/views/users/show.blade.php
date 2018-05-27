@extends('Village.interface')
@section('contenu')
      <div class="content_box">
          <h1>{{$user->name}}</h1>
          <h3>Citation :</h3>
          <p>{{$user->citation}}</p>
          <h3>Autres informations :</h3>
          <ul class="tmo_list">
              <li>Prénom : {{$user->prenom}}</li>
              <li>Nom de famille: {{$user->nom}}</li>
              <li>Email : {{$user->email}}</li>
          </ul>
          @can('canMofiy')
          <a href="{{action('UserController@edit', $user)}}">Modifier les informations</a>
          <a href="{{action('UserController@destroy', $user)}}" onclick="return confirm('Voulez-vous vraiment suprimer ce compte?')">Fermer le compte</a>
          @endcan
        </div>
      //Ajouter personages de la persone
@endsection
