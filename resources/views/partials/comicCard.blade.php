<div class="h-100 position-relative">
    {{-- BACKGROUND IMAGE --}}
    <img src="{{ $comic->thumb }}" alt="Immagine Fumetto" class="w-100 h-100 object-fit-cover">

    {{-- ON HOVER DESCRIPTION --}}
    <a href="/comics/{{ $comic->id }}"
        class="hoverable-description position-absolute top-0 start-0 h-100 w-100 d-flex flex-column-reverse">
        <div class="text-white px-2">
            <h4 class="mb-3">{{ $comic->title }}</h4>
        </div>
    </a>
</div>
