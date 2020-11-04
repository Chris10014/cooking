@extends('layouts.app')
@section('title', 'Zutaten')

@section('content')

<head>
    <h1>Neue Zutat eingeben</h1>
</head>
<main>


    <form method="POST" action="{{ route("incredients.store") }}">

        @csrf

        <div class="form-group">
            <label for="incredient_de">Zutat</label>
            <input type="text" class="form-control" name="incredient_de" id="incredient_de" placeholder="Zutat"
                value="{{ old('incredient_de') }}">
            @error('incredient_de')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="food_group_id">Zutatenart</label>
            <select class="custom-select" id="food_group_id" name="food_group_id">
                <option value=""></option>
                @foreach($food_groups->sortBy('food_group_de') as $food_group)
                <option value="{{ $food_group->id }}">{{ $food_group->food_group_de }}</option>
                @endforeach
            </select>
            @error('food_group_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="grocery_division_id">Abteilung</label>
            <select class="custom-select" id="grocery_division_id" name="grocery_division_id">
                <option value=""></option>
                @foreach($grocery_divisions->sortBy('division_de') as $grocery_division)
                <option value="{{ $grocery_division->id }}">{{ $grocery_division->division_de }}</option>
                @endforeach
            </select>
            @error('food_group_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
</main>




@endsection
