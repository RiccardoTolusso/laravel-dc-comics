@extends('default.default')


@section('main')
    <div class="row row-cols-4 g-4 py-3">
        @foreach ($comics as $comic)
            <div class="col">
                @include('partials.comicCard')
            </div>
        @endforeach
    </div>
@endsection
