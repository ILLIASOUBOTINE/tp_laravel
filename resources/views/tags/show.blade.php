<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Details du categorie № ". $categorie->id) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl"> {{$categorie->libelle}}</h1>
                    <x-btn class="text-white bg-sky-400" :route="route('categories.edit',$categorie->id)" >Modifier</x-btn>
                    <x-btn class="text-white bg-red-400" :route="route('categories.destroy',$categorie->id)" >Supprimer</x-btn>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>