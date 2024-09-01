@extends("layouts.dashboard")

@section("page-content")
    <div class="w-full mx-0">
        <h3 class="text-xl font-bold uppercase mb-4">Liste des laboratoires</h3>

        @if (Session::has('success'))
            <div class="alert alert-success mb-4">
                {{ Session::get('success') }}
            </div>
        @endif

        <table class="table w-full">
            <thead>
                <tr>
                    <th>Nom du laboratoire</th>
                    <th>Type de laboratoire</th>
                    <th>Directeur du laboratoire</th>
                    <th>Description</th>
                    <th>Photo du laboratoire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($labos as $labo)
                    <tr>
                        <td>{{ $labo->labo_name }}</td>
                        <td>{{ $labo->type->cat_name }}</td>
                        <td>{{ $labo->directeur->name }}</td>
                        <td>{{ $labo->description_labo }}</td>
                        <td><img src="{{ asset('storage/' . $labo->photo_labo) }}" alt="{{ $labo->labo_name }}" class="max-w-200 max-h-200"></td>
                        
                        <td class="flex flex-col space-y-2 w-full">
                            <div class="w-full mb-2">
                                <a href="{{ route('labos.show', ['labo' => $labo->id]) }}" class="btn w-full btn-primary">
                                    <i class="fas fa-eye"></i> Voir Détails
                                </a>
                            </div>
                            <div class="w-full mb-2">
                                <a href="{{ route('labos.historiqueDirecteurs', ['labo' => $labo->id]) }}" class="btn w-full btn-info">
                                    <i class="fas fa-history"></i> Historique
                                </a>
                            </div>
                            <div class="w-full mb-2">
                                <form action="{{ route('labos.destroy', ['labo' => $labo->id]) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-full" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce laboratoire?')">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                            <div class="w-full">
                                <a href="{{ route('labos.edit', ['labo' => $labo->id]) }}" class="btn w-full btn-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
