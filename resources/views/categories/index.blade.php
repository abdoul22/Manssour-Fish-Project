@extends('layouts.app')

@section('content')
    {{-- here were start Tailwinsd css --}}
    <section class=" mt-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">
        <article class="mb-3">
            <h2 class="text-2xl font-extrabold text-gray-900">Voir toute les categories<i
                    class="fa-solid fa-pen-to-square"></i></h2>
            <table class="table table-dark">
                <thead>
                    <th>titre</th>
                    <th>espece</th>
                    <th>taille</th>
                    <th>quantite</th>
                    <th>prix Unitaire</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="table-active">
                            <th>{{ $category->title }}</th>
                            <td>{{ $category->espece }}</td>
                            <td>{{ $category->taille }}</td>
                            <td>{{ $category->quantite }}</td>
                            <td>{{ $category->prixu }}</td>
                            <td><a class="mr-4 " style=" color: white; display: inline-block;"
                                    href="{{ route('categories.edit', ['id' => $category->id]) }}"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a class="mr-4" style=" color: white; display: inline-block;"
                                    href="{{ route('categories.delete', ['id' => $category->id]) }}"><i
                                        class="bi bi-trash3"></i></a>
                                <a class="mr-4 " style="display: inline-block; color: white;"
                                    href="{{ route('categories.edit', ['id' => $category->id]) }}"><i
                                        class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th scope="row" colspan="4">Prix Totol</th>
                        <td colspan="1">200000</td>
                        <th>MRU</th>
                    </tr>
                </tbody>
            </table>
            <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                <article
                    class="mt-3  bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                    <div class="relative w-full h-80 md:h-64 lg:h-44">
                        <img src="https://cdn.pixabay.com/photo/2021/08/03/11/01/stairs-6519085_960_720.jpg"
                            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="px-3 py-4">
                        <h3 class="text-sm text-gray-500 pb-2">
                            <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="#">
                                <span class="absolute inset-0"></span>
                                Intermediate Level
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                    </div>
                </article>
                <article style="margin-right: 10px !important;"
                    class="mt-3 bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                    <div class="relative w-full h-80 md:h-64 lg:h-44">
                        <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="px-3 py-4">
                        <h3 class="text-sm text-gray-500 pb-2">
                            <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="#">
                                <span class="absolute inset-0"></span>
                                Basic Level
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                    </div>
                </article>
                <article
                    class="mt-3 bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                    <div class="relative w-full h-80 md:h-64 lg:h-44">
                        <img src="https://cdn.pixabay.com/photo/2021/08/03/11/01/stairs-6519085_960_720.jpg"
                            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="px-3 py-4">
                        <h3 class="text-sm text-gray-500 pb-2">
                            <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="#">
                                <span class="absolute inset-0"></span>
                                Intermediate Level
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                    </div>
                </article>

            </section>
        </article>
    </section>
@endsection
