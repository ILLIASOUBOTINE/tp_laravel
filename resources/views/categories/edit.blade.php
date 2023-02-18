<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Modifier le categorie № ". $categorie->id) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('categories.update', $categorie->id) }}" method="POST" class="form-example">
                        @method('PUT')
                        @csrf
                        <div class="form-example">
                            <p><label for="libelle">Libelle</label> <input type="text" name="libelle" id="libelle" value="{{$categorie->libelle}}" required></p>
                            @error('libelle')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="font-bold py-2 px-4 m-1 rounded text-white bg-sky-400">Sauvegarder</button>
                    </form>
                    <x-btn class="text-black bg-stone-400" :route="route('categories.index')" >Annuler</x-btn>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>