@extends('layouts.siteApp')

@section('content')
@vite(['resources/css/recherche.css', 'resources/js/app.js'])
    <section>
        <h2>Nos Laboratoires de Recherche</h2>
        <div class="container">
            <a href="/laboratoire/detail" class="laboratoire_container">
                <img src="{{ asset('storage/image1.png') }}" alt="Description de l'image">
                <div class="laboratoire_desc">
                    <p class="titre">Laboratoire Génie Electrique et Informatique</p>
                    <p class="description">Lorem Lorem Lorem ...</p>
                    <div class="laboratoire_direction">
                        <p class="directeur">Directeur :</p>
                        <p class="nom_directeur">Dr GUENANON Kouadio Christday Ulysse</p>
                    </div>
                </div>
            </a>  
        </div>
    </section>
@endsection