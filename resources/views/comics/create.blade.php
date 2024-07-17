@extends('default.default')

@section('title')
    DC Comics - Create New Comic
@endsection

@section('main')
    @isset($comic)
        <form class="row g-3 text-white my-4" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
        @else
            <form class="row g-3 text-white my-4" action="{{ route('comics.store') }}" method="POST">
            @endisset
            @csrf

            {{-- titolo --}}
            <div class="col-md-8">
                <label for="input-title" class="form-label">Titolo</label>
                <input value="{{ $comic->title ?? '' }}" required type="text" name="title" class="form-control"
                    id="input-title" maxlength="255">
            </div>

            {{-- prezzo --}}
            <div class="col-md-4">
                <label for="input-price" class="form-label">Prezzo &euro;</label>
                <input value="{{ $comic->price ?? '' }}" required type="number" step="0.01" name="price"
                    class="form-control" id="input-price" min="0">
            </div>

            {{-- description --}}
            <div class="col-md-12">
                <label for="input-description" class="form-label">Descrizione</label>
                <input value="{{ $comic->description ?? '' }}" required type="text" name="description"
                    class="form-control" id="input-description">
            </div>

            {{-- series --}}
            <div class="col-md-4">
                <label for="input-series" class="form-label">Serie</label>
                <input value="{{ $comic->series ?? '' }}" required type="text" name="series" class="form-control"
                    id="input-series">
            </div>
            {{-- type --}}
            <div class="col-md-4">
                <label for="input-type" class="form-label">Tipologia</label>
                <input value="{{ $comic->type ?? '' }}" required type="text" name="type" class="form-control"
                    id="input-type">
            </div>
            {{-- sale_date --}}
            <div class="col-md-4">
                <label for="input-sale_date" class="form-label">Data di pubblicazione</label>
                <input value="{{ $comic->sale_date ?? '' }}" required type="date" name="sale_date" class="form-control"
                    id="input-sale_date">
            </div>
            {{-- artists --}}
            <div class="col-md-6">
                <label for="input-artists" class="form-label">Artisti</label>
                <input value="{{ $comic->artists ?? '' }}" required type="text" name="artists" class="form-control"
                    id="input-artists">
            </div>
            {{-- writers --}}
            <div class="col-md-6">
                <label for="input-writers" class="form-label">Scrittori</label>
                <input value="{{ $comic->writers ?? '' }}" required type="text" name="writers" class="form-control"
                    id="input-writers">
            </div>
            {{-- thumb --}}
            <div class="col-md-12">
                <label for="input-thumb" class="form-label">Immagine di copertina</label>
                <input value="{{ $comic->thumb ?? '' }}" required type="text" name="thumb" class="form-control"
                    id="input-thumb">
            </div>

            @isset($comic)
                {{-- update button --}}
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary w-100" value="Aggiorna">
                </div>
            @else
                {{-- submit button --}}
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary w-100" value="Invia">
                </div>
            @endisset

        </form>
    @endsection
