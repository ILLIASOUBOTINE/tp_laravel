<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Modifier le jeu № ". $jeu->id) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('jeux.update', $jeu->id) }}" method="POST" class="form-example">
                             @method('PUT')
                            @csrf
                        <div class="form-example">
                            {{-- <p><label for="titre">Titre</label></p>  --}}
                            <p><label for="titre">Titre</label> <input type="text" name="titre" id="titre" value="{{$jeu->titre}}" required></p>
                            {{-- <p><label for="description">Description</label></p>  --}}
                            <p><label for="description">Description</label> <input type="text" name="description" id="description" value="{{$jeu->description}}" required></p>
                        </div>
                       
                                     
                            <button type="submit">Sauvegarder</button>
                        
                      
                            {{-- <x-btn class="text-white bg-sky-400" :route="route('jeux.update',$jeu->id)" >Sauvegarder</x-btn> --}}
                           
                            
                       
                    </form>

                     <x-btn class="text-black bg-stone-400" :route="route('jeux.index')" >Annuler</x-btn>
                
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>