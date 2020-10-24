@extends('layouts.app')

@section('title', "Authoren")

@section('content')
    <h1>Hallo</h1>
    <main>
        @foreach($authors as $author)
        {{ $author->name }}
        {{ $author->first_name }}
        @endforeach
    </main>
@endsection
