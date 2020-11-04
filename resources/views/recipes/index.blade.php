@extends('layouts.app')

@section('title', 'Rezepte')

@section('content')
<header>
    <h1>Rezepte</h1>
</header>
<main>
    @foreach($recipes as $recipe)
    {{ $recipe->name }}<br>
    @endforeach
</main>


@endsection