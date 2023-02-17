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
                    <p>{{$jeu->description}}</p>
                    <div class="flex justify-end">
                        <x-btn class="text-white bg-sky-400" :route="route('jeux.edit',$jeu->id)" >Modifier</x-btn>
                        <x-btn class="text-white bg-red-400" :route="route('jeux.destroy',$jeu->id)" >Supprimer</x-btn>
                    </div>
                   
                    {{-- <x-btn  bg1Color="red" txtColor="#fffbeb" text="Suprimer"/> --}}
                    {{-- <a href="{{$route}}">
                        <button class="font-bold py-2 px-4 m-1 rounded {{$class}}" >
                            {{$title}}
                        </button>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>