{{-- 
   @extends("layouts.dashboard")

   @section("page-content")
   
   <div class="main-panel">
    <div class="content-wrapper">
 
      <div class="card">
        <div class="card-body">
          <h3 class="container text-center"> Listes des partenaires</h3>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>N</th>
                        <th>Date de sortie</th>
                        <th>Date de retour</th>
                        <th>Codification</th>
                        <th>Nom du personnel</th>
                        <th>Lieux d'utilisation</th>
                        <th>Motif</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>45</td>
                      <td>45 </td>
                      <td>45 </td>
                      <td>45 </td>
                      <td>45 </td>
                      <td>45 </td>
                      <td>45 </td>
                      <td>
                        <label class="badge badge-info">Dispo</label>
                      </td>
                      <td>
                        <button class="btn btn-outline-primary" id="redirectionButton">Detail</button>
                      </td>
                    </tr>
                   
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
<!-- main-panel ends -->
   @endsection
 --}}

 @extends("layouts.dashboard")

 
 <input type="hidden" name="" value="{{$increment=1}}">
@section("page-content")
<div class="w-[80%] mx-[10%]">

    <h3 class="text-xl font-bold uppercase">Listes des partenaires</h3>
   
   <x-tableau>

   </x-tableau>

</div>
@endsection