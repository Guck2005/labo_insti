<!-- historiqueDirecteurs.blade.php -->

@extends("layouts.dashboard")

@section("page-content")
    <div class="w-[100%] mx-[0%]">
        <h3 class="text-xl font-bold uppercase">Historique des Directeurs</h3>

        <h4>Laboratoire: {{ $labo->labo_name }}</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>Directeur</th>
                    <th>Date et Heure du Changement</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historiqueDirecteurs as $historique)
                    <tr>
                        <td>{{ $historique->nouveauDirecteur->name }}</td>
                        <td>{{ $historique->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
