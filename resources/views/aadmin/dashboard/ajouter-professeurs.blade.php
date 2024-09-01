@extends("layouts.dashboard")

@section("page-content")
<div class="w-[80%] mx-[10%]">

    <h3 class="text-xl font-bold uppercase">Ajouter des professeurs par fichier</h3>

   <form method="POST" action="{{route('admin.savecomptes')}}" enctype="multipart/form-data">
     <input type="hidden" name="type" value="{{$id}}">
    <x-inscriptions-files-form>

    </x-inscriptions-files-form>
   </form>


</div>
@endsection
