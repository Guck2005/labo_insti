@extends("layouts.dashboard")

@section("page-content")
@vite(['resources/css/ajouter.css', 'resources/js/app.js'])
<div class="w-[100%] mx-[0%]">

    <h3 class="text-xl font-bold uppercase">Modifier un laboratoire</h3>
    @if (Session::has('status'))
    <div class="alert alert-success">
        {{Session::get('status')}}
    </div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            @foreach($errors->all() as $error)
                {{$error}}
                <br>
            @endforeach
        <div>
    @endif

    <form method="post" action="{{ route('labos.update', ['labo' => $labo->id]) }}" enctype="multipart/form-data" id="pedagogicalLabForm">

        <div class="ajouter">
            <div class="entete entete1">
                <label for="labo_name">Nom du laboratoire:</label>
                <input type="text" id="labo_name" name="labo_name" placeholder="Entrez le nom du laboratoire" value="{{ $labo->labo_name }}" required>
            </div>
            <div class="entete entete2">
                <label for="type_labo">Type de Labo</label>
                <select id="type_labo" name="type_labo" class="mt-1 mb-3 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-300 focus:border-blue-300">
                    @foreach($type_labo as $type)
                        <option value="{{ $type->id }}" {{ $labo->type_labo == $type->id ? 'selected' : '' }}>{{ $type->cat_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @csrf
        @method('PUT') <!-- Ajouter cette ligne pour indiquer que c'est une requête de mise à jour -->

        <label for="directeur_labo">Directeur du laboratoire:</label>
        <select id="directeur_labo" name="directeur_labo" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $labo->directeur_labo == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

        <!-- Description du laboratoire -->
        <fieldset>
            <legend>Description du laboratoire</legend>
            <label for="description_labo">Description du laboratoire:</label>
            <textarea id="description_labo" name="description_labo" placeholder="Entrez la description du laboratoire" required>{{ $labo->description_labo }}</textarea>
        </fieldset>

       <!-- Section des missions -->
        <div class="mission">
            <div id="missionsSection">
                @foreach($labo->missions as $index => $mission)
                    <label for="mission_description">Mission {{ $index + 1 }}</label>
                    <textarea id="mission_description" name="mission_description[]" placeholder="Entrez la description de la mission" required>{{ $mission->mission }}</textarea>
                @endforeach
            </div>
            <div class="bouton">
                <button type="button" id="addMissionBtn">+</button>
            </div>
        </div>

        <!-- Section des technologies et innovations -->
        <div class="technologie_innovation">
            <div id="techSection">
                @foreach($labo->technologies as $index => $tech)
                    <label for="tech_desc">Technologie et Innovation {{ $index + 1 }}</label>
                    <textarea id="tech_desc" name="tech_desc[]" placeholder="Entrez les technologies et innovations du laboratoire" required>{{ $tech->technologie }}</textarea>
                @endforeach
            </div>
            <div class="bouton">
                <button type="button" id="addTechBtn">+</button>
            </div>
        </div>

        <!-- Section des impacts -->
        <div class="impact">
            <div id="impactSection">
                @foreach($labo->impacts as $index => $impact)
                    <label for="impact_description">Impact {{ $index + 1 }}</label>
                    <textarea id="impact_description" name="impact_description[]" placeholder="Entrez impact " required>{{ $impact->impact }}</textarea>
                @endforeach
            </div>
            <div class="bouton">
                <button type="button" id="addImpactBtn">+</button>
            </div>
        </div>

        <!-- Section des perspectives -->
        <div class="perspective">
            <div id="perspectiveSection">
                @foreach($labo->perspectives as $index => $perspective)
                    <label for="perspective_description">Perspective {{ $index + 1 }}</label>
                    <textarea id="perspective_description" name="perspective_description[]" placeholder="Entrez la perspective " required>{{ $perspective->perspective }}</textarea>
                @endforeach
            </div>
            <div class="bouton">
                <button type="button" id="addPerspectiveBtn">+</button>
            </div>
        </div>
        <label for="membre_labo">Membres du laboratoire:</label>
        <select id="membre_labo" name="membre_labo[]" multiple required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ in_array($user->id, $labo->membres->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="departement">Département:</label>
        <input type="text" id="departement" name="departement" value="{{ $labo->departement }}" placeholder="Entrez le département du laboratoire" required>

        <label for="photo_labo">Photo du laboratoire:</label>
        <input type="file" id="photo_labo" name="photo_labo" accept=".jpg, .jpeg, .png">


        <div class="bouton">
            <button type="submit">Modifier</button>
        </div>
    </form>

</div>

<script>
    // Le reste du script pour la gestion des boutons d'ajout
</script>

@endsection
