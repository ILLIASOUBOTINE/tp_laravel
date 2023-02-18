<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de tous les jeux') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($jeux) > 0)
                    <table class="table-auto" >
                        <thead >
                            <tr>
                                <th>ID</th>
                                <th>TITRE</th>
                                <th class="flex justify-around items-center">
                                    <span>ACTIONS</span> 
                                    <x-btn class="text-white bg-green-400" :route="route('jeux.create')">CREATE</x-btn>
                                </th>
                            
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($jeux as $jeu)
                            <tr>
                                <td>{{$jeu->id}}</td>
                                <td>{{$jeu->titre}}</td>
                                <td class="flex items-center">
                                    <x-btn class="text-white bg-sky-400" :route="route('jeux.edit',$jeu->id)" >Modifier</x-btn>
                                    <x-btn class="text-black bg-stone-300" :route="route('jeux.show',$jeu->id)" >Voir</x-btn>
                                    <x-btn-supprimer :route="route('jeux.destroy',$jeu->id)" />
                                    
                                    
                                </td>
                               
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        Je n'ai pas de jeux.
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>