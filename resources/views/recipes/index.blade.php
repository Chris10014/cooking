@extends('layouts.app')

@section('title', 'Rezepte')

@section('content')
<header>
    <h1>Rezepte</h1>
</header>
<main>
    <p>Rezept hinzufügen <a href="{{ route('recipes.create') }}"><span><i class="fas fa-plus-square"></i></span></a></p>
    <section>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th></th>
                    <th>Rezepttitel</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipes as $recipe)
                 <tr>
                    <td rowspan="2">
                        <img src="{{ asset('storage/app/' . $recipe->recipe_image) }}" alt="dish" width="100px">
                    </td>
                    <td>
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

                        {{ $recipe->name }}</td>
                </tr>
                <tr>
                    <td>
                        {{ $recipe->cookbook ? $recipe->cookbook->title . ", S. " . $recipe->page : "" }}
                        @if(count($recipe->incredients) != 0)
                        <details>
                            <summary>
                                Zutatenliste
                            </summary>
                            <ul>
                                @foreach($recipe->incredients->sortBy('incredient_de') as $incredient)
                                <li>{{ $incredient->incredient_de }}
                                    @if($incredient->pivot->quantity != null)
                                        <span>Menge: {{  $incredient->pivot->quantity }}</span>
                                        @if($incredient->pivot->unit_id != null)
                                           <span>{{ $units->where('id', $incredient->pivot->unit_id)->first()->abbreviation }}</span>
                                        @endif
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </details>
                        @else
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('recipes.edit', [$recipe->id]) }}"><span><i class="fas fa-pen"></i></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <p><strong>Legende</strong><br><i class="fas fa-drumstick-bite"></i> Fleisch, <i class="fas fa-carrot"></i> vegetarisch, <i class="fas fa-seedling"></i> vegan, <i class="fas fa-fish"></i> Fisch</p>
</main>
@endsection
