@extends('layouts.siteApp')

@section('content')
@vite(['resources/css/detail.css', 'resources/js/app.js'])
    <h2>Détails du Laboratoire</h2>
    <div class="lab-container">
        <div class="lab-section">
            <div class="lab-details">
                <div class="lab-img">
                    <img src="{{ asset('storage/' . $labo->photo_labo) }}" alt="Description de l'image">
                </div>
                
                <div class="lab-info">
                    <div class="info-item">
                        <p class="info-label">Directeur</p>
                        <p>{{ $labo->directeur->name }}</p>
                    </div>
                    <div class="info-item">
                        <p class="info-label">Type de laboratoire</p>
                        <p>{{ $labo->type->cat_name }}</p>
                    </div>
                    <!-- Ajoutez d'autres détails du laboratoire selon vos besoins -->
                </div>
            </div>
            
            <div class="add-section">
                <div class="lab-info">
                    <p class="info-label">Autres laboratoires</p>
                    <ul>
                        <!-- Ajoutez ici la liste des autres laboratoires si nécessaire -->
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="extra-section">
            <div class="block-presentation">
                <p class="main-paragraph">Description du laboratoire</p>
                <p>{{ $labo->description_labo }}</p>
            </div>
            
            <div class="block-mission">
                <p class="main-paragraph">Missions</p>
                <div class="mission">
                    @foreach ($labo->missions as $mission)
                        <div class="mission-item">
                            <div>
                                <div class="line"></div>
                                <div class="circle"></div>
                            </div>
                            <div>
                                <p>{{ $mission->mission }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="block-mission">
                <p class="main-paragraph">Technologies et Innovations</p>
                <div class="mission">
                    @foreach ($labo->technologies as $technologie)
                        <div class="mission-item">
                            <div>
                                <div class="line"></div>
                                <div class="circle"></div>
                            </div>
                            <div>
                                <p>{{ $technologie->technologie }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="block-mission">
                <p class="main-paragraph">Impacts:</p>
                <div class="mission">
                    @foreach ($labo->impacts as $impact)
                        <div class="mission-item">
                            <div>
                                <div class="line"></div>
                                <div class="circle"></div>
                            </div>
                            <div>
                                <p>{{ $impact->impact }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="block-mission">
                <p class="main-paragraph">Perspectives</p>
                <div class="mission">
                    @foreach ($labo->perspectives as $perspective)
                        <div class="mission-item">
                            <div>
                                <div class="line"></div>
                                <div class="circle"></div>
                            </div>
                            <div>
                                <p>{{ $perspective->perspective }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="block-mission">
                <p class="main-paragraph">Membres du laboratoire</p>
                <div class="mission">
                    @foreach ($labo->membres as $membre)
                        <div class="mission-item">
                            <div>
                                <div class="line"></div>
                                <div class="circle"></div>
                            </div>
                            <div>
                                <p>{{ $membre->user->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            
        </div>
    </div>
    
    <a href="{{ url('/') }}">Retour à la liste des laboratoires</a>
@endsection
