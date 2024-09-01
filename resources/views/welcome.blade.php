@extends('layouts.siteApp')

@section('content')
    <h2>Bienvenue sur la Page d'Accueil</h2>
    <p>Choisissez un type de laboratoire :</p>
 
        @foreach($typesLabo as $type)
            <a href="{{ route('labos.type', ['type' => $type->id]) }}">{{ $type->cat_name }}</a>
        @endforeach

@endsection
