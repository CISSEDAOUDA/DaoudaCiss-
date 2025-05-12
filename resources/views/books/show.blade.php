@extends('layouts.app')

@section('content')
<h1>{{ $book->titre }}</h1>
<p><strong>Auteur :</strong> {{ $book->auteur }}</p>
<p><strong>Description :</strong> {{ $book->description }}</p>
<p><strong>Publié le :</strong> {{ $book->published_at }}</p>
<p><strong>Note moyenne :</strong> {{ number_format($book->reviews->avg('rating'), 1) }}/5</p>

<h2> Vos Avis</h2>
@foreach($book->reviews as $review)
    <div>
        <p><strong>{{ $review->user->name }}</strong> ({{ $review->rating }}/5)</p>
        <p>{{ $review->comment }}</p>
    </div>
@endforeach

<hr>
<h3>Ajouter vos avis</h3>
<form method="POST" action="{{ route('reviews.store') }}">
    @csrf
    <input type="hidden" name="book_id" value="{{ $book->id }}">

    <label>Utilisateur</label>
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br>

    <label>Notes</label>
    <input type="number" name="rating" min="1" max="5"><br>

    <label>Commentaires</label>
    <textarea name="comment"></textarea><br>

    <button type="submit">Envoyer</button>
</form>
@endsection
