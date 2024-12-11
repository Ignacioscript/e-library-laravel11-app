@extends('layouts.app')

@section('title', 'Members')

@section('content')
    @foreach($members as $member)
        <div class="border-b border-gray-300 py-4">
            <h2 class="text-xl font-bold">{{$member->name}}</h2>
            <p>{{$member->email}}</p>
        </div>
    @endforeach
@endsection
