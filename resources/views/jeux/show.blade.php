<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Details du jeu № ". $jeu->id) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-5 text-black"> {{$jeu->titre}}</h1>
                    <x-btn class="text-black bg-green-400" :route="route('categories.show',$jeu->categorie->id)" >{{$jeu->categorie->libelle}}</x-btn>
                    <div class="flex">
                        @foreach($jeu->tags as $tag)
                        <x-btn class="text-black bg-amber-600" :route="route('tags.show', $tag->id)" >{{$tag->nom}}</x-btn>
                        @endforeach
                    </div>    
                    <p>{{$jeu->description}}</p>
                    <div class="flex justify-end">
                        <x-btn class="text-white bg-sky-400" :route="route('jeux.edit',$jeu->id)" >Modifier</x-btn>
                        <x-btn-supprimer :route="route('jeux.destroy',$jeu->id)" />
                    </div>
                   
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>