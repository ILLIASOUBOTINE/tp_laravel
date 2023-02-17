<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de tous les tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($tags) > 0)
                    <table class="table-auto" >
                        <thead >
                            <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th class="flex justify-around items-center">
                                <span>ACTIONS</span> 
                                
                                    <x-btn class="text-white bg-green-400" :route="route('tags.create')">CREATE</x-btn>
                              
                            </th>
                            
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->nom}}</td>
                                <td>
                                     <x-btn class="text-white bg-sky-400" :route="route('tags.edit',$tag->id)" >Modifier</x-btn>
                                    <x-btn class="text-black bg-stone-300" :route="route('tags.show',$tag->id)" >Voir</x-btn>
                                    <x-btn class="text-white bg-red-400" :route="route('tags.destroy',$tag->id)" >Supprimer</x-btn>
                               
                                </td>
                               
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        Je n'ai pas de categories.
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>