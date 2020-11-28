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
            <label for="name">Rezept</label>
            <input class="pseudo-table-cell" type="text" class="form-control" name="name" id="name" placeholder="Rezeptname"
                value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="preparation_time">Zubereitungszeit in Minuten</label>
            <input class="pseudo-table-cell" type="number" min="3" class="form-control" name="preparation_time" id="preparation_time"
                placeholder="Zubereitungszeit" value="{{ old('preparation_time') }}">
            @error('preparation_time')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-4">
            <label for="cookbook_id">Kochbuch:</label>
            <select class="pseudo-table-cell" class="custom-select" id="cookbook_id" name="cookbook_id">
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
            <input class="pseudo-table-cell" type="number" class="form-control" name="page" id="page" placeholder="Seite"
                value="{{ old('page') }}">
            @error('page')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            @foreach($dish_types->sortBy('de') as $dish_type)
            <label for="">{{ $dish_type->de }}
                <input type="radio" name="dish_type_id" value="{{ $dish_type->id }}"
                    {{ old('dish_type_id') == $dish_type->id ? 'checked' : '' }}>
                @endforeach
                @error('dish_type_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            @foreach($courses->sortBy('id') as $course)
            <label for="">{{ $course->de }}
                <input type="radio" name="course_id" value="{{ $course->id }}"
                    {{ old('course_id') == $course->id ? 'checked' : '' }}>
                @endforeach
                @error('course_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="recipe_image">Bild</label>
            <input type="file" class="form-control" name="recipe_image" id="recipe_image" placeholder="Bild">
            {{-- an uploaded file can't be repopulated after a failed validation --}}
            @error('recipe_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="cell">
            {{-- laracast "Laravel From Scratch episode 33" timestamp 02:00 --}}
            @foreach($incredients->sortBy('incredient_de') as $incredient)
            <div class="cell">

                <label for="incredient_ids">{{ $incredient->incredient_de }}</label>
                <input type="checkbox" name="incredient_ids[]" value="{{ $incredient->id }}" @if(in_array($incredient->id,
                old('incredient_ids', [])))
                checked
                @endif
                >
                @error('incredient_ids')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="cell">
                <label for="quantity">Menge</label>
                <input type="number" class="form-control" name="quantities[]" id="quantity" placeholder="Menge"
                    value="{{ old('quantity') }}">
                @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="cell">


                <label for="unit">Einheit:</label>
                <select class="custom-select" id="unit_id" name="unit_ids[]">
                    <option value=""></option>
                    @foreach($units->sortBy('abbreviation') as $unit)
                    <option value="{{ $unit->id }}" {{in_array($unit->id, old('units_id', []))? 'selected' : '' }}>
                        {{ $unit->abbreviation }}</option>
                    @endforeach
                </select>

                @error('unit_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            @endforeach

        </div>


        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
</main>

@endsection
