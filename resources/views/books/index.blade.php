@extends('layouts.app')

@section('content')
<h1>Liste des Livres</h1>
@foreach ($books as $book)
    <div>
        <h3>{{ $book->title }}</h3>
        <p> Livre: {{ $book->author }}</p>
        <a href="{{ route('books.show', $book->id) }}">Voir détails</a>
    </div>
@endforeach

{{ $books->links() }}
@endsection
