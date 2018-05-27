@foreach($users as $idx=>$user)
    @component('contenu.perso-post-large', ['classe'=>($idx%2)?'':'news_odd'])
            @slot('titre')
                <a href="{{action('UserController@show', $user)}}">{{$user->prenom}} {{$user->nom}}</a>
            @endslot
            @slot('text')
                <p>{{$user->citation}}</p>
            @endslot
            @slot('lien')
                {{action('UserController@show', $user)}}
            @endslot
    @endcomponent
@endforeach