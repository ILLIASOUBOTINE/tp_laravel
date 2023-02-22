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
                            @error('titre')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                            @error('description')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror

                            <p><label for="categorie">Categorie</label>
                                <select type="numbre" name="categorie" id="categorie" required>
                                    @foreach($categories as $categorie)
                                        @if($jeu->categorie_id == $categorie->id )
                                            <option value="{{$categorie->id}}" selected>{{$categorie->libelle}}</option>
                                        @else
                                            <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                        @endif
                                    @endforeach
                                    
                                </select>
                            </p>
                        </div>
                        
                        <button type="submit" class="font-bold py-2 px-4 m-1 rounded text-white bg-sky-400">Sauvegarder</button>
                    </form>
                    <x-btn class="text-black bg-stone-400" :route="route('jeux.index')" >Annuler</x-btn>

                    <div class="flex">
                        @foreach($jeu->tags as $tag)
                            <x-btn class="text-black bg-amber-600" :route="route('tags.show', $tag->id)" ><span>{{$tag->nom}}</span>
                            
                                <a href="{{ route('jeux.detach', [$jeu->id, $tag->id] )}}" class="w-10">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0
                                        24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346
                                        9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107
                                        1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25
                                        2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0
                                        00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0
                                        00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0
                                        00-7.5 0"></path>
                                    </svg>
                                </a>
                            
                            
                            </x-btn>
                                        
                        @endforeach
                    </div>
                   
                    <form action="{{ route('jeux.attach', $jeu->id) }}" method="POST" class="form-example">
                       
                        @csrf
                        <div class="form-example">
                            
                            <p><label for="tag">Tag</label>
                            
                                <select type="numbre" name="tag" id="tag" required>
                                    @foreach($tags as $tag)
                                      <option value="{{$tag->id}}">{{$tag->nom}}</option>
                                    @endforeach        
                                </select>
                            </p>
                        </div>
                        
                        <button type="submit" class="font-bold py-2 px-4 m-1 rounded text-white bg-sky-400">Add</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>