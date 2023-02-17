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
                    <form action="" method="get" class="form-example">
                        <div class="form-example">
                           <p><label for="name">Libelle</label></p> 
                           <p> <input type="text" name="name" id="name" value="{{$categorie->libelle}}" required></p>
                           
                        </div>
                        
                        <div class="form-example">
                            <x-btn class="text-white bg-sky-400" :route="route('categories.edit',$categorie->id)" >Sauvegarder</x-btn>
                            <x-btn class="text-black bg-stone-400" :route="route('categories.index')" >Annuler</x-btn>
                        </div>
                    </form>

                   
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>