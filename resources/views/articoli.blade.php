<x-layout>

    <x-nav-bar />

    <h1>{{$articoli_title}}</h1>

    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
                <x-card :titolo="$articolo['titolo']" :descrizione="$articolo['descrizione']" :categoria="$articolo['categoria']">
                    <a href="{{ route('articoli.dettaglio', ['id' => $chiave]) }}" class="btn btn-primary">Dettaglio</a>
                </x-card>
            @endforeach
        </div>
    </div>

</x-layout>
