<!-- resources/views/Admin/partenaire/detailsLabo.blade.php -->

@extends("layouts.dashboard")

@section("page-content")
    <div class="w-full mx-0">
        <h3 class="text-3xl font-bold uppercase mb-4 text-primary">Détails du laboratoire</h3>

        <div class="grid grid-cols-2 gap-8">
            <div class="text-lg">
                <p><strong class="text-secondary">Nom du laboratoire:</strong> {{ $labo->labo_name }}</p>
                <p><strong class="text-secondary">Type de laboratoire:</strong> {{ $labo->type->cat_name }}</p>
                <p><strong class="text-secondary">Directeur du laboratoire:</strong> {{ $labo->directeur->name }}</p>
                <p><strong class="text-secondary">Description:</strong> {{ $labo->description_labo }}</p>
                
                <div class="my-8">
                    <h4 class="text-xl font-bold mb-4 text-primary">Missions:</h4>
                    <ul class="list-disc pl-6">
                        @foreach ($labo->missions as $mission)
                            <li>{{ $mission->mission }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="my-8">
                    <h4 class="text-xl font-bold mb-4 text-primary">Technologies et Innovations:</h4>
                    <ul class="list-disc pl-6">
                        @foreach ($labo->technologies as $technologie)
                            <li>{{ $technologie->technologie }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="my-8">
                    <h4 class="text-xl font-bold mb-4 text-primary">Impacts:</h4>
                    <ul class="list-disc pl-6">
                        @foreach ($labo->impacts as $impact)
                            <li>{{ $impact->impact }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="my-8">
                    <h4 class="text-xl font-bold mb-4 text-primary">Perspectives:</h4>
                    <ul class="list-disc pl-6">
                        @foreach ($labo->perspectives as $perspective)
                            <li>{{ $perspective->perspective }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="my-8">
                    <h4 class="text-xl font-bold mb-4 text-primary">Membres:</h4>
                    <ul class="list-disc pl-6">
                        @foreach ($labo->membres as $membre)
                            <li>{{ $membre->user->name }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <div>
                <img src="{{ asset('storage/' . $labo->photo_labo) }}" alt="Photo du laboratoire" class="max-w-full h-auto rounded-lg shadow-md">
            </div>
        </div>

        <!-- Vous pouvez ajouter d'autres sections au besoin -->

    </div>
@endsection
