<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crèer un Post') }}
        </h2>
    </x-slot>

    <div class="bg-dark text-white py-12 container mt-8">
        <form action="{{ route('post.store') }}" method="POST" class=" p-5">
            @csrf
            @method('POST')
            <div class="mb-3 form-group">
                <label for="exampleInputEmail1" class="form-label">Titre</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                <div id="emailHelp" class="form-text">Veiller ajouter un titre.</div>
            </div>
            <div class="mb-3 form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Ajouter une description</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" cols="5 "></textarea>
            </div>
            <div class="mb-3 form-group">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="featured" class="form-control-file" id="image">
                <div id="image" class="form-text">Veiller ajouter une Image.</div>
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
    </div>
</x-app-layout>
