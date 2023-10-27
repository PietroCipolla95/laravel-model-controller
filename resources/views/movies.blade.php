@extends('layouts.app')


@section('main')
    <main id="movies_main">

        <h1 class="py-5 text-center fw-bold">
            Movies
        </h1>

        <div class="container">
            <div class="row py-5 g-5 row-cols-3">

                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h6>
                                    {{ $movie->title }}
                                </h6>
                            </div>

                            <img src="https://picsum.photos/200/200" alt="" class="border">

                            <div class="card-body">
                                <p class="">
                                    {{ $movie->original_title }}, {{ $movie->nationality }}
                                </p>
                                <p>
                                    {{ $movie->date }}
                                </p>
                                <p>
                                    {{ $movie->vote }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



    </main>
@endsection
