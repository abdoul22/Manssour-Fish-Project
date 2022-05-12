@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Creer un poste
        </h2>
    </div>

    <div class="bg-dark text-white py-12 container mt-8">
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="nav-item">
                        <a class="nav-link "><span class="text-white">{{ $error }}</span></a>
                    </li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('post.store') }}" method="POST" class=" p-5" enctype="multipart/form-data">
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
</div>

@endsection
