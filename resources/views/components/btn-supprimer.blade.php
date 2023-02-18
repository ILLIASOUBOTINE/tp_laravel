<form action="{{ $route }}" method="POST">
    @method('DELETE')
    @csrf
                                     
    <button type="submit" class="font-bold py-2 px-4 m-1 rounded text-white bg-red-400">Supprimer</button>
</form>