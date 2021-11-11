@extends("layout.base")

@section('pageContent')
    <h1>Inserisci un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Percorso dell'immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il percorso dell'immagine">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie di appartenenza">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di acquisto</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di acquisto">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di fumetto">
        </div>
        <button type="submit" class="btn btn-primary">Crea fumetto</button>
    </form>
@endsection

{{-- <h1>{{ $comic['title'] }}</h1>
<img src="{{ $comic['thumb'] }}" alt="">
<h3>Descrizione:{{ $comic['description'] }}</h3>
<h3>Prezzo: {{ $comic['price'] }} euro</h3>
<h3>Serie: {{ $comic['series'] }}</h3>
<h3>Data di vendita: {{ $comic['sale_date'] }}</h3>
<h3>Tipo di fumetto: {{ $comic['type'] }}</h3> --}}
