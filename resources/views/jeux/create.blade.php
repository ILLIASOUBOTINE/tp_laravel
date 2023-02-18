<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create nouveu jeu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form action="{{ url('jeux') }}" method="POST">
                        @csrf
                        <label for="titre">Entrez le titre : </label>
                        <input type="text" name="titre" id="titre">
                        <label for="description">Entrez le description : </label>
                        <input type="text" name="description" id="description">
                        @error('titre')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                           @error('description')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="submit" value="Envoyer !" class="font-bold py-2 px-4 m-1 rounded text-white bg-sky-400">
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>