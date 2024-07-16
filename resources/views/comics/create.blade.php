@extends('default.default')

@section('title')
    DC Comics - Create New Comic
@endsection

@section('main')
    <form class="row g-3 text-white my-4" action="{{ route('comics.store') }}" method="POST">
        @csrf

        {{-- titolo --}}
        <div class="col-md-8">
            <label for="input-title" class="form-label">Titolo</label>
            <input required type="text" name="title" class="form-control" id="input-title" maxlength="255">
        </div>

        {{-- prezzo --}}
        <div class="col-md-4">
            <label for="input-price" class="form-label">Prezzo &euro;</label>
            <input required type="number" step="0.01" name="price" class="form-control" id="input-price"
                min="0">
        </div>

        {{-- description --}}
        <div class="col-md-12">
            <label for="input-description" class="form-label">Descrizione</label>
            <input required type="text" name="description" class="form-control" id="input-description">
        </div>

        {{-- series --}}
        <div class="col-md-4">
            <label for="input-series" class="form-label">Serie</label>
            <input required type="text" name="series" class="form-control" id="input-series">
        </div>
        {{-- type --}}
        <div class="col-md-4">
            <label for="input-type" class="form-label">Tipologia</label>
            <input required type="text" name="type" class="form-control" id="input-type">
        </div>
        {{-- sale_date --}}
        <div class="col-md-4">
            <label for="input-sale_date" class="form-label">Data di pubblicazione</label>
            <input required type="date" name="sale_date" class="form-control" id="input-sale_date">
        </div>
        {{-- artists --}}
        <div class="col-md-6">
            <label for="input-artists" class="form-label">Artisti</label>
            <input required type="text" name="artists" class="form-control" id="input-artists">
        </div>
        {{-- writers --}}
        <div class="col-md-6">
            <label for="input-writers" class="form-label">Scrittori</label>
            <input required type="text" name="writers" class="form-control" id="input-writers">
        </div>
        {{-- thumb --}}
        <div class="col-md-12">
            <label for="input-thumb" class="form-label">Immagine di copertina</label>
            <input required type="text" name="thumb" class="form-control" id="input-thumb">
        </div>
        {{-- submit button --}}
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary w-100" value="Invia">
        </div>

    </form>
@endsection
