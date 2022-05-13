@extends('layouts.app')

@section('content')
    <div class=" mt-5">
        <div name="header">
            <h2 class="container font-semibold text-xl text-gray-800 leading-tight">
            @foreach ($categories as $category )
            {{$category->id}}
            @endforeach
        </h2>
        </div>
        <div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{-- Here will be form --}}
                            <section>
                                <div class="container mt-5">
                                    <div name="header">
                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                            Modifier la Categorie
                                        </h2>
                                    </div>

                                    <div class="bg-dark text-white py-12 container mt-8">
                                        @if (count($errors) > 0)
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="nav-item">
                                                        <a class="nav-link "><span
                                                                class="text-white">{{ $error }}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <form action="{{ route('categories.update', ['id' => $category->id ]) }}" method="POST"
                                            class=" p-5">
                                            @csrf
                                            <div class="mb-3 form-group">
                                                <label class="form-label">Titre</label>
                                                <input type="text" name="title" value="{{$category->title}}" class="form-control">
                                                <div id="emailHelp" class="form-text text-gray ">Veiller ajouter un titre.
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group">
                                                <label class="form-label">espéces</label>
                                                <input class="form-control" value="{{$category->espece}}" name="espece">
                                            </div>
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    Taille</label>
                                                <input class="form-control" value="{{$category->taille}}" name="taille">
                                            </div>
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    Quantité en Kg</label>
                                                <input class="form-control"  value="{{$category->quantite}}" name="quantite">
                                            </div>
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    Prix Unitaire</label>
                                                <input class="form-control" value="{{$category->prixu}}" name="prixu">
                                            </div>

                                            <button type="submit" class="btn btn-success">Modifier</button>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
