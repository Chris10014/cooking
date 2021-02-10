@extends('layouts.app')

@section('title', 'Rezepte')

@section('content')
<header>
    <h1>Rezepte</h1>
</header>
<main>
    <p>Rezept hinzufügen <a href="{{ route('recipes.create') }}"><span><i class="fas fa-plus-square"></i></span></a></p>
    <label for="searchRecipes">Rezepte suchen <span class="form-control-feedback"><i
                class="fas fa-search"></i></span></label>
    <input type="text" class="form-control" name="recipe" id="searchRecipes" placeholder="Suchtext eingeben für Rezept oder Zutat">
    </div><br>
    <div id="message">
        {{-- Div to display message if no result found --}}
    </div><br>
    <section>
        <table class="table table-striped table-dark" id="recipeTable">
            <thead>
                <tr>
                    <th></th>
                    <th>Rezepttitel</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <tbody id="recipeTableBody">
                @foreach($recipes as $recipe)
                 <tr>
                    <td>
                        <img src="{{ asset($recipe->recipe_image) }}" onerror= "src='/cooking/storage/app/recipe_images/mealPlaceholder.jpg'" alt="Gericht" width="100px">
                    </td>
                    <td>
                        <span><i class="{{ $recipe->dish_type->glyphicon_fontawesome }}"></i></span>

                       {{ $recipe->name }}

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
                        <p><i>keine Zutaten eingetragen</i></p>
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
