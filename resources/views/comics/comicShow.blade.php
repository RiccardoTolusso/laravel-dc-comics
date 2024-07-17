@extends('default.default')

@section('title')
    DC Comics - {{ $comic->title }}
@endsection


@section('main')
    <div class="card my-5 w-100">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-9 position-relative">
                <div class="card-body">
                    <h4 class="card-title text-uppercase">{{ $comic->title }}</h4>
                    <h6 class="card-title text-uppercase">{{ $comic->series }} - &#128197; {{ $comic->sale_date }}</h6>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text"><small class="text-body-secondary">Artisti: {{ $comic->artists }}</small></p>
                    <p class="card-text"><small class="text-body-secondary">Scrittori: {{ $comic->writers }}</small></p>
                    <h5 class="card-text text-end px-5 py-4 position-absolute bottom-0 w-100 text-primary">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button href="" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                            <div>
                                {{ $comic->price }}
                            </div>
                        </div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
