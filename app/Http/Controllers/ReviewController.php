<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        Review::create($validated);

        return redirect()->route('books.show', $request->book_id)
                         ->with('success', 'Avis ajouté avec succès.');
    }
}
