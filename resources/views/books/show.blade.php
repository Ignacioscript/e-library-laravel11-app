@extends('layouts.app')

@section('title', 'Book Page')

@section('heading', 'Book Page')

@section('content')

    <h1>{{$book['title']}}!</h1>
    <h2>{{$book->author->name}}</h2>



@endsection
