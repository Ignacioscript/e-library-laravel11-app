<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name'=>'Home Page']);
});

Route::get('/books', function (){

   $books = \App\Models\Book::with('author')->paginate(5); //show pagination with numbers <1,2,3>
  //$books = \App\Models\Book::with('author')->simplepaginate(3); //show simple previous next pagination, uses OFFSET (rows to be skipped), so in tables with 1000 items could be inefficient (it has to load the previous 999 data
    //if i want the 1000 item.
 //    $books = \App\Models\Book::with('author')->cursorPaginate(3); //same previous next but it put a bookmark as an ID in the last page item and repeat the query from that ID Good for large databases.
   return view('books.index', ['books'=>$books]);
});

Route::get('/book/{id}', function ($id){

    $book = \App\Models\Book::find($id);
    return view('books.show', ['book'=>$book]);

});

Route::get('/books/create', function (){
    return view('books.create');

});

Route::post('books', function(){
    dd('Creating a book');
});




Route::get('/members', function (){
    return view('members', ['name'=>'Member Page']);
});



Route::get('/loans', function (){
    return view('loans', ['name'=>'Loan Page']);
});




