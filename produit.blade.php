@extends('layout.app1')

@section('title')
    Produit
@endsection
<input type="hidden" name="" value="{{$increment=1}}">
@section('contenu')
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Produits</h4>

          @if (Session::has('status'))
                  <div class="alert alert-success">
                      {{Session::get('status')}}
                  </div>
          @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Image</th>
                        <th>Nom de la produit</th>
                        <th>Catégorie du produit</th>
                        <th>Prix</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($produit as $produit)
                    <tr>
                      <td>{{$increment}}</td>
                      <td><img src="/storage/product_image/{{$produit->product_image}}" alt=""></td>
                      <td>{{$produit->product_name}}</td>
                      <td>{{$produit->product_category}}</td>
                      <td>{{$produit->product_price}}</td>
                      <td>
                        @if ($produit->status==1)
                            <label class="badge badge-info">Activé</label>
                        @else
                           <label class="badge badge-danger">Désactivé</label> 
                        @endif
                      </td>
                      <td>
                        <button class="btn btn-outline-primary" onclick="window.location='{{url('/editproduit/'.$produit->id)}}'">Edit</button>
                        <a href="{{url('/supprimerproduit/'.$produit->id)}}"  id="delete" class="btn btn-outline-danger">Delete</a>
                        @if ($produit->status==1)
                        <button class="btn btn-outline-warning" onclick="window.location='{{url('desactiver_produit/'.$produit->id)}}'">Désactiver</button>      
                        @else
                        <button class="btn btn-outline-success" onclick="window.location='{{url('activer_produit/'.$produit->id)}}'">activer</button> 
                        @endif
                      </td>
                  </tr>
                    <input type="hidden" name="" value="{{$increment=$increment+1}}">

                    @endforeach
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
    
@endsection
@section('scripts')
    <script src="backend/js/data-table.js"></script>
@endsection