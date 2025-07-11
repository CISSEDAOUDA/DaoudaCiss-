<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

protected $fillable = ['book_id', 'user_id', 'rating', 'comment'];

}
