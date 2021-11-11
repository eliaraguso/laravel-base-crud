@extends("layout.base")

@section('pageContent')
    <h1>Lista di tutti i fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di vendita</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic["id"] }}</th>
                <td>{{ $comic["title"] }}</td>
                <td>{{ $comic["description"] }}</td>
                <td>{{ $comic["price"] }}</td>
                <td>{{ $comic["series"] }}</td>
                <td>{{ $comic["sale_date"] }}</td>
                <td>{{ $comic["type"] }}</td>
                <td>
                    <a href="{{ route("comics.show", $comic["id"]) }}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                    <a href="{{ route("comics.edit", $comic["id"]) }}"><button type="button" class="btn btn-warning">Modifica</button></a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
