@extends('layouts.app')
@section('title', 'Neues Rezept')
@section('content')
<header>
    <h1>Neues Rezept eingeben</h1>
</header>

<main>
    <form method="POST" action="{{ route("recipes.store") }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="recipeName">Rezept *</label>
            <input type="text" class="form-control" name="name" id="recipeName" placeholder="Rezeptname"
                value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="preparationTime">Zubereitungszeit in Minuten</label>
            <input type="number" min="3" class="form-control" name="preparation_time" id="preparationTime"
                placeholder="Zubereitungszeit" value="{{ old('preparation_time') }}">
            @error('preparation_time')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="cookbook">Kochbuch:</label>
            <select class="custom-select" id="cookbook" name="cookbook_id">
                <option value=""></option>
                @foreach($cookbooks->sortBy('title') as $cookbook)
                <option value="{{ $cookbook->id }}" {{ old('cookbook_id') == $cookbook->id ? 'selected' : '' }}>
                    {{ $cookbook->title }}</option>
                @endforeach
            </select>

            @error('cookbook_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label for="page">Seite</label>
            <input type="number" class="form-control" name="page" id="page" placeholder="Seite"
                value="{{ old('page') }}">
            @error('page')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <p>Art *</p>
            @foreach($dish_types->sortBy('de') as $dish_type)
                <input type="radio" name="dish_type_id" id="{{ $dish_type->de }}" value="{{ $dish_type->id }}"
                    {{ old('dish_type_id') == $dish_type->id ? 'checked' : '' }}>
                    <label for="{{ $dish_type->de }}">{{ $dish_type->de }}</label>
                @endforeach
                @error('dish_type_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <p>Gang *</p>
            @foreach($courses->sortBy('id') as $course)
                <input type="radio" name="course_id" id="{{ $course->id }}" value="{{ $course->id }}"
                    {{ old('course_id') == $course->id ? 'checked' : '' }}>
                    <label for="{{ $course->id }}">{{ $course->de }}</label>
                @endforeach
                @error('course_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="recipeImage">Bild</label>
            <input type="file" class="form-control" name="recipe_image" id="recipeImage" placeholder="Bild">
            {{-- an uploaded file can't be repopulated after a failed validation --}}
            @error('recipe_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <p>* Pflichtfelder</p>

        <div id="incredientsList"><p>Zutatenliste</p></div>

    <div>
        <br>
        <Input type="submit" class="btn btn-primary" value="Speichern" onclick="return confirm('Alle Zutaten eingegeben?')">
        <input type="button" class="btn btn-dark" onclick="location.href='{{ route('recipes') }}'; return false;" value="Abbrechen">
    </div><br>
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
