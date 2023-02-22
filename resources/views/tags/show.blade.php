<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Details du tag № ". $tag->id) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl"> {{$tag->nom}}</h1>
                    <ul class="p-6 "> Liste de tous les jeux de ce tag:
                    @foreach($tag->jeux as $jeu)
                       <a href="{{route('jeux.show', $jeu->id)}}"> 
                            <li class="list-disc">{{$jeu->titre}}</li>
                       </a>
                    @endforeach
                    
                      
                    </ul>
                    <x-btn class="text-white bg-sky-400" :route="route('tags.edit',$tag->id)" >Modifier</x-btn>
                    <x-btn-supprimer :route="route('tags.destroy',$tag->id)" />
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>