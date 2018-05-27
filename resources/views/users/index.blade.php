@extends('Village.interface')
@section('citation')
    @component('Village.citation')
        @slot('titre')
            Le site de génerateur de personage
        @endslot
        @slot('texte')
            Les résultat ne sont pas garentie et son variable pas de renboursement ne sera acsepter
        @endslot
    @endcomponent
@endsection
@section('contenu')
    @include('contenu.perso-liste-large')
@endsection



