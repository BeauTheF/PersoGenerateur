@extends('Village.interface')
@section('contenu')
    <h1>Modifier les information de {{$user->name}}</h1>
    @include('users.form')
@endSection