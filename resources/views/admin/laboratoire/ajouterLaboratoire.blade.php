@extends("layouts.dashboard")

@section("page-content")
@vite(['resources/css/ajouter.css', 'resources/js/app.js'])
<div class="w-[100%] mx-[0%]">

    <h3 class="text-xl font-bold uppercase">Ajouter un laboratoire</h3>
    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            @foreach ($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        </div>
    @endif

    <form method="post" action="{{ route('store') }}" enctype="multipart/form-data" id="pedagogicalLabForm" style="" class="formulaire">

        <!-- Informations générales du laboratoire -->
        <fieldset>
            <legend>Informations générales</legend>
            <div class="flex justify-between items-center">
                    <div class="flex justify-between items-center w-3/5 pr-4">
                        <label for="labo_name" class="flex-shrink-0 pr-4" >Nom du laboratoire:</label>
                        <input type="text" id="labo_name" name="labo_name" placeholder="Entrez le nom du laboratoire"  class="w-full"  required>
                    </div>
                    <div class="entete entete2">
                        <label for="type_labo">Type de Labo</label>
                        <select id="type_labo" name="type_labo" class="mt-1 mb-3 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-300 focus:border-blue-300">
                            @foreach($type_labo as $type)
                                <option value="{{ $type->id }}">{{ $type->cat_name }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
        </fieldset>

        @csrf

        <!-- Responsable du laboratoire -->
        <fieldset>
            <legend>Responsable du laboratoire</legend>
           
            <div class="flex justify-between">
            <div>
                <button id="directeurDropdownRadioButton" data-dropdown-toggle="directeurDropdownDefaultRadio" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" style="font-family: Arial, sans-serif; font-size: 16px;">Directeur du Laboratoire <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>

                <!-- Dropdown menu for Directeur -->
                <div id="directeurDropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" style="font-family: Arial, sans-serif; font-size: 16px;">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="directeurDropdownRadioButton">
                        @foreach($users as $user)
                            <li>
                                <div class="flex items-center">
                                    <input id="directeur_labo_{{ $user->id }}" type="radio" value="{{ $user->id }}" name="directeur_labo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="font-family: Arial, sans-serif; font-size: 16px;">
                                    <label for="directeur_labo_{{ $user->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" style="font-family: Arial, sans-serif; font-size: 16px;">{{ $user->name }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            

            <div>
                
                <button id="membreDropdownBgHoverButton" data-dropdown-toggle="membreDropdownBgHover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 style="font-family: Arial, sans-serif; font-size: 16px; style="font-family: Arial, sans-serif; font-size: 16px;" type="button">Membres du Laboratoire <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>

                <!-- Dropdown menu for Membres -->
                <div id="membreDropdownBgHover" class="z-10 hidden w-48 bg-white rounded-lg shadow dark:bg-gray-700">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="membreDropdownBgHoverButton">
                        @foreach($users as $user)
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <input id="membre_{{ $user->id }}" type="checkbox" value="{{ $user->id }}" name="membre_labo[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="font-family: Arial, sans-serif; font-size: 16px;">
                                    <label for="membre_{{ $user->id }}" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300" style="font-family: Arial, sans-serif; font-size: 16px;">{{ $user->name }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

</div>
            
        </fieldset>

        <!-- Description du laboratoire -->
        <fieldset>
            <legend>Description du laboratoire</legend>
            <label for="description_labo">Description du laboratoire:</label>
            <textarea id="description_labo" name="description_labo" placeholder="Entrez la description du laboratoire" required></textarea>
        </fieldset>

        <!-- Missions du laboratoire -->
        <fieldset class="missions-fieldset">
            <legend>Missions du laboratoire</legend>
            <div class="mission">
                <div id="missionsSection">
                    <label for="mission_description">Mission 1</label>
                    <textarea id="mission_description" name="mission_description[]" placeholder="Entrez la description de la mission" required></textarea>
                </div>
                <div class="bouton">
                    <button type="button" id="addMissionBtn">+</button>
                </div>
            </div>
        </fieldset>

        <!-- Technologie et Innovation -->
        <fieldset class="tech-fieldset">
            <legend>Technologie et Innovation</legend>
            <div class="technologie_innovation">
                <div id="techSection">
                    <label for="tech_desc">Technologie et Innovation: 1</label>
                    <textarea id="tech_desc" name="tech_desc[]" placeholder="Entrez les technologies et innovations du laboratoire" required></textarea>
                </div>
                <div class="bouton">
                    <button type="button" id="addTechBtn">+</button>
                </div>
            </div>
        </fieldset>

        <!-- Impact -->
        <fieldset class="impact-fieldset">
            <legend>Impact</legend>
            <div class="impact">
                <div id="impactSection">
                    <label for="impact_description">Impact 1</label>
                    <textarea id="impact_description" name="impact_description[]" placeholder="Entrez impact " required></textarea>
                </div>
                <div class="bouton">
                    <button type="button" id="addImpactBtn">+</button>
                </div>
            </div>
        </fieldset>

        <!-- Perspective -->
        <fieldset class="perspective-fieldset">
            <legend>Perspective</legend>
            <div class="perspective">
                <div id="perspectiveSection">
                    <label for="perspective_description">Perspective 1</label>
                    <textarea id="perspective_description" name="perspective_description[]" placeholder="Entrez la perspective " required></textarea>
                </div>
                <div class="bouton">
                    <button type="button" id="addPerspectiveBtn">+</button>
                </div>
            </div>
        </fieldset>

       

        <!-- Département -->
        <fieldset>
            <legend>Département</legend>
            <label for="departement">Département:</label>
            <input type="text" id="departement" name="departement" placeholder="Entrez le département du laboratoire" required>
        </fieldset>

        <!-- Photo du laboratoire -->
        <fieldset>
            <legend>Photo du laboratoire</legend>
            <label for="photo_labo">Photo du laboratoire:</label>
            <input type="file" id="photo_labo" name="photo_labo" accept=".jpg, .jpeg, .png" required>
        </fieldset>

        <div class="bouton">
            <button type="submit">Soumettre</button>
        </div>

    </form>

</div>
<script>
    function toggleLabForm() {
        var labType = document.getElementById('type_labo').value;
        var researchLabForm = document.getElementById('researchLabForm');
        var pedagogicalLabForm = document.getElementById('pedagogicalLabForm');

        if (labType === 'pedagogique') {
            researchLabForm.style.display = 'none';
            pedagogicalLabForm.style.display = 'block';
        } else {
            researchLabForm.style.display = 'block';
            pedagogicalLabForm.style.display = 'none';
        }
    }

    document.getElementById('type_labo').addEventListener('change', toggleLabForm);



    // document.getElementById('type_labo').addEventListener('change', toggleLabForm);

    var addMissionBtn = document.getElementById('addMissionBtn');
    var missionsSection = document.getElementById('missionsSection');
    var addTechBtn = document.getElementById('addTechBtn');
    var techSection = document.getElementById('techSection');
    var addImpactBtn = document.getElementById('addImpactBtn');
    var impactSection = document.getElementById('impactSection');
    var addPerspectiveBtn = document.getElementById('addPerspectiveBtn');
    var perspectiveSection = document.getElementById('perspectiveSection');

    var missionCounter = 1;
    var techCounter = 1;
    var impactCounter = 1;
    var perspectiveCounter = 1;

    addMissionBtn.addEventListener('click', function () {
        missionCounter++;
        addTextarea('mission_description', missionCounter, 'Entrez la description de la mission', missionsSection);
    });

    addTechBtn.addEventListener('click', function () {
        techCounter++;
        addTextarea('tech_desc', techCounter, 'Entrez les technologies et innovations du laboratoire', techSection);
    });

    addImpactBtn.addEventListener('click', function () {
        impactCounter++;
        addTextarea('impact_description', impactCounter, 'Entrez impact', impactSection);
    });

    addPerspectiveBtn.addEventListener('click', function () {
        perspectiveCounter++;
        addTextarea('perspective_description', perspectiveCounter, 'Entrez les perspectives', perspectiveSection);
    });

    function addTextarea(name, counter, placeholder, section) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<label for="' + name + '">' + capitalize(name) + ' ' + counter + '</label>' +
            '<textarea id="' + name + '" name="' + name + '[]" placeholder="' + placeholder + '" required></textarea>';
        section.appendChild(newDiv);
    }

    function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    
</script>


@endsection
