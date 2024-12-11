@extends('layouts.app')

@section('title', 'Books')

@section('heading', 'Books')

@section('content')

    <div class="space-y-4">
    @foreach($books as $book)

        <a href="/book/{{$book['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg"><strong>Title: </strong>{{$book['title']}}
            <div><strong> ISBN: {{$book['isbn']}}</strong></div>
            <div class="font-bold text-blue-800 text-sm"><strong>{{$book->author->name}}</strong></div>
        </a>
    @endforeach
        <div>
            {{$books->links()}}
        </div>
    </div>


@endsection

