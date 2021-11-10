@extends("layout.base")

@section('pageContent')
    <h1>{{ $comic["title"] }}</h1>
    <img src="{{ $comic["thumb"] }}" alt="">
    <h3>Descrizione:{{ $comic["description"] }}</h3>
    <h3>Prezzo: {{ $comic["price"] }} euro</h3>
    <h3>Serie: {{ $comic["series"] }}</h3>
    <h3>Data di vendita: {{ $comic["sale_date"] }}</h3>
    <h3>Tipo di fumetto: {{ $comic["type"] }}</h3>
@endsection
