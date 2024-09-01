<!-- component -->

        <div class="container-fluid flex-auto block py-8 pt-6 px-9">
          <div class="overflow-x-auto">
            <table class=" table caption-top  ">
            <caption>listes des partenaires</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Contact</th>
                <th scope="col">Secteur d'activité</th>
                <th scope="col">Site web</th>
                <th scope="col">Adresse mail</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
        
            </thead>
            <tbody>
              {{-- @foreach ($liste as $partenaire)
              <tr>
                <th scope="row">{{$increment}} </th>
                <td>{{$partenaire ->nomPartenaire}}</td>
                <td>{{$partenaire ->adresse}}</td>
                <td>{{$partenaire ->contact}}</td>
                <th>{{$partenaire ->secteurActivite}}</th>
                <td>{{$partenaire ->siteWeb}}</td>
                <td>{{$partenaire ->mail}}</td>
                <td><img src="/storage/product_image/{{$partenaire ->imagePartenaire}}" alt=""></td>  
                <td>
                  <label class="badge badge-info">Dispo</label>
                </td>
                <td>
                  <button class="btn btn-outline-primary" id="redirectionButton">Detail</button>
                  <button class="btn btn-outline-success" onclick="window.location=' '">activer</button> 

                </td> 
              </tr>
              <input type="hidden" name="" value="{{$increment=$increment+1}}">
              @endforeach --}}

              <!-- Admin/partenaire/partenaire.blade.php -->
             <!-- Admin/partenaire/partenaire.blade.php -->
{{-- 
             @foreach($partenaire as $p)
             <p>Nom du partenaire : {{ $p->nomPartenaire }}</p>
             <!-- Ajoutez des lignes similaires pour afficher d'autres propriétés -->
         @endforeach --}}
         



            </tbody>
          </table>
          </div>
        </div>

