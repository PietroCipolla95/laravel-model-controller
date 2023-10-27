@extends('layouts.app')


@section('main')
    <main id="movies_main" class="bg-secondary">

        <h1 class="py-5 text-center fw-bold">
            Movies
        </h1>

        <div class="container">
            <div class="row border-top border-info pb-5 g-5">

                {{-- dinamic generation of movies col and cards --}}
                @foreach ($movies as $movie)
                    <div class="col-4">
                        <div class="card border-0 bg-dark text-light h-100">
                            <div class="card-header py-3">
                                <h5 class="text-danger">
                                    {{ $movie->title }}
                                </h5>
                            </div>

                            <img src="https://picsum.photos/200/200" alt="" class="">

                            <div class="card-body d-flex flex-column">
                                <p class="text-danger fw-bold">
                                    <span class="text-info fw-bold">Original title: </span>{{ $movie->original_title }}
                                </p>
                                <p class="text-danger fw-bold">
                                    <span class="text-info fw-bold">Nationality:</span> {{ $movie->nationality }}
                                </p>
                                <p class="text-danger fw-bold">
                                    <span class="text-info fw-bold">Release:</span> {{ $movie->date }}
                                </p>
                                <p class="text-danger fw-bold">
                                    <span class="text-info fw-bold">Vote:</span> {{ $movie->vote }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



    </main>
@endsection
