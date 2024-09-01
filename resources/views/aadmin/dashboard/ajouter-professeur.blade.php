@extends("layouts.dashboard")

@section("page-content")
<div class="w-[80%] mx-[10%]">

    <h3 class="text-xl font-bold uppercase">Ajouter un ou des professeurs</h3>
    <div class="flex justify-end">
        <a href="#">
            <x-primary-button class="mt-5">
                <a href="{{route('admin.ajoutprofesseurs')}}">
                    {{ __('Utiliser un fichier excel') }}
                </a>
            </x-primary-button>
        </a>
    </div>

   <form method="POST" action="{{route('admin.savecomptes')}}">
     <input type="hidden" name="type" value="{{$id}}">
    <x-inscription-form>

    </x-inscription-form>
   </form>


</div>
@endsection
