@extends('layouts.siteApp')

@section('content')
@vite(['resources/css/recherche.css', 'resources/js/app.js'])
    <h2> {{ $typeName }}</h2>
    <div class="container">
        @foreach($labos as $labo)
            <a href="{{ route('labos.detail', ['labo' => $labo->id]) }}" class="laboratoire_container">
                <img src="{{ asset('storage/' . $labo->photo_labo) }}" alt="Description de l'image">
                <div class="laboratoire_desc">
                    <p class="titre">{{ $labo->labo_name }}</p>
                    <p class="description">{{ $labo->description_labo }}</p>
                    <div class="laboratoire_direction">
                        <p class="directeur">Directeur :</p>
                        <p class="nom_directeur">{{ $labo->directeur->name }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
