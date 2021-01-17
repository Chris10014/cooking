@extends('layouts.app')
@section('title', 'Rezept bearbeiten')
@section('content')
<header>
    <h1>Rezept bearbeiten</h1>
</header>

<main>
    <form method="POST" action="{{ route("recipes.update", [$recipe->id]) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="recipeName">Rezept</label>
            <input type="text" class="form-control" name="name" id="recipeName" placeholder="Rezeptname"
                value="{{ $recipe->name }}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="preparationTime">Zubereitungszeit in Minuten</label>
            <input type="number" min="3" class="form-control" name="preparation_time" id="preparationTime"
                placeholder="Zubereitungszeit" value="{{ $recipe->preparation_time }}">
                @error('preparation_time')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="cookbook">Kochbuch:</label>
            <select class="custom-select" id="cookbook" name="cookbook_id">
                <option value=""></option>
                @foreach($cookbooks->sortBy('title') as $cookbook)
                <option value="{{ $cookbook->id }}" {{ $recipe->cookbook_id == $cookbook->id ? 'selected' : '' }}>
                    {{ $cookbook->title }}</option>
                @endforeach
            </select>
            @error('cookbook_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="page">Seite</label>
            <input type="number" class="form-control" name="page" id="page" placeholder="Seite" value="{{ $recipe->page }}">
            @error('page')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            @foreach($dish_types->sortBy('de') as $dish_type)
            <input type="radio" name="dish_type_id" id="{{ $dish_type->de }}" value="{{ $dish_type->id }}"
                {{ $recipe->dish_type_id == $dish_type->id ? 'checked' : '' }}>
            <label for="{{ $dish_type->de }}">{{ $dish_type->de }}</label>
            @endforeach
            @error('dish_type_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            @foreach($courses->sortBy('id') as $course)
            <input type="radio" name="course_id" id="{{ $course->de }}" value="{{ $course->id }}"
                {{ $recipe->course_id == $course->id ? 'checked' : '' }}>
            <label for="{{ $course->id }}">{{ $course->de }}</label>
            @endforeach
            @error('course_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">

         <span class="inline-block">
            <label for="recipeImage">Bild</label>
            <input type="file" class="form-control" name="recipe_image" id="recipeImage" placeholder="Bild">
            {{-- an uploaded file can't be repopulated after a failed validation --}}
            @error('recipe_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </span>
            <span class="inline-block">
                @if(null !== ("storage/app/$recipe->recipe_image"))
                <img src="{{ asset('storage/app/' . $recipe->recipe_image) }}" alt="dish" width="100px">
                @endif
            </span>
        </div>

        <div id="incredientsList">

            @error('incredient_ids')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('quantities')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('unit_ids')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if(count($recipe->incredients) != 0)
            <p>Zutatenliste</p>
            @foreach ($recipe->incredients as $incredient)
            <div class="row" id="row{{ $incredient->id }}">
                <div class="col-md-3">
                    <p>{{ $incredient->incredient_de }}: </p>
                </div>
                <input type="hidden" name="incredient_ids[]" id="incredient{{ $incredient->id }}" value={{ $incredient->id }}>
                <div class="col-auto">
                    <input type="number" step="0.1" lang="de" name="quantities[]" id="quantity{{ $incredient->id }}"
                        value={{ $incredient->pivot->quantity }} style="width:100px">
                </div>
                <div class="col-auto">
                    <select name="unit_ids[]" id="unit{{ $incredient->id }}">
                        @foreach($units AS $unit)
                        <option value={{ $unit->id }} @if($unit->id == $incredient->pivot->unit_id)
                            selected=true
                            @endif
                            >{{ $unit->abbreviation }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <span onclick="deleteIncredientFromRecipe( '{{ $recipe->id }}', '{{ $incredient->id }}', '{{ $incredient->incredient_de }}' )"><i class='fas fa-trash-alt'></i></span>
                </div>
            </div>

            @endforeach
            @else
            <p>Keine Zutaten zugeordnet</p>
            @endif
        </div>




        <div>
            <br>
            <input type="submit" class="btn btn-primary" value="Speichern" onclick="return confirm('Alle Zutaten eingegeben?')">
            <input type="button" class="btn btn-dark" onclick="location.href='{{ route('recipes') }}'; return false;" value="Abbrechen">
        </div><br>
    </form>

    {{-- Delete button needs an own form to change POST method into "DELETE" --}}
    <form class="inline-block" method="POST" action="{{ route('recipes.delete', [$recipe->id]) }}">
        @csrf
        @method('DELETE')
        <input type="submit" name="submitted" class="btn btn-danger"
            onclick="return confirm('{{ $recipe->name }} endgültig löschen?')" value="Löschen">
    </form>

    <div>
        <br>
        <label for="searchIncredient">Zutat suchen <span class="form-control-feedback"><i
                    class="fas fa-search"></i></span></label>
        <input type="text" class="form-control" name="incredient" id="searchIncredient" placeholder="Zutat eingeben"
            onkeyup="liveSearchForItems(this.value,'searchResult', '/cooking/recipes/search/')">
    </div><br>
    <div id="searchResult">
        {{-- Div to display the result of the incredient search --}}
    </div><br>

</main>

@endsection
