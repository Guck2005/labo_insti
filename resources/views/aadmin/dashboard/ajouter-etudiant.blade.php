@extends("layouts.dashboard")

@section("page-content")
<div class="w-[80%] mx-[10%]">

    <h3 class="text-xl font-bold uppercase">Ajouter un ou des étudiants</h3>
    <div class="flex justify-end">
        <a href="#">
            <x-primary-button class="mt-5">
                <a href="{{route('admin.ajoutetudiants')}}">
                    {{ __('Utiliser un fichier excel') }}
                </a>
            </x-primary-button>
        </a>
    </div>

   <form method="POST" action="{{route('admin.savecompte')}}">
       <input type="hidden" name="type" value="{{$id}}">
    <x-inscription-form>
    </x-inscription-form>
   </form>
   <x-tableau>

   </x-tableau>

</div>
@endsection
