@extends('layouts.app')

@section('title', 'Rezepte')

@section('content')
<header>
    <h1>Rezepte</h1>
</header>
<main>
    @foreach($recipes as $recipe)

    @switch($recipe->dish_type->de)

    @case('Fleisch')
    <span><i class="fas fa-drumstick-bite"></i></span>
    @break

    @case('vegetarisch')
    <span><i class="fas fa-carrot"></i></span>
    @break

    @case('vegan')
    <span><i class="fas fa-seedling"></i></span>
    @break

    @case('Fisch')
    <span><i class="fas fa-fish"></i></span>
    @break

    @case('Pasta')
    <span><i class="fas fa-pizza-slice"></i></span>
    @break

    @endswitch

    {{ $recipe->name }}<br>

    @endforeach

    <p>Legende: <i class="fas fa-drumstick-bite"></i> Fleisch, <i class="fas fa-carrot"></i> vegetarisch, <i class="fas fa-seedling"></i> vegan, <i class="fas fa-fish"></i> Fisch</p>
</main>


@endsection
