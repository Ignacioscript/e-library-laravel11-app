<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Book extends Model
{

    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;


    protected $fillable = ['isbn', 'title', 'author_id', 'publication_year', 'publisher', 'available' ];
//    public static function find($id)
//    {
//        $book = Arr::get(Book::all(), $id-1);
//
//        if(! $book){
//            abort(404);
//        }
//        return $book;
//    }



    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

}
