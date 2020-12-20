@extends('layouts.app')
@section('title', 'Zutaten')

@section('content')

<header>
    <h1>Zutat {{ $incredient->incredient_de }} bearbeiten</h1>
</header>
<main>
    <form class="inline-block" method="POST" action="{{ route('incredients.update', [$incredient->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="incredient">Zutat</label>
            <input type="text" class="form-control" name="incredient_de" id="incredient" placeholder="Zutat"
                value="{{ $incredient->incredient_de }}">
        </div>
        <div class="form-group">
            <label for="food_group">Zutatenart</label>
            <select class="custom-select" id="food_group" name="food_group_id">
                <option value=""></option>
                @foreach($food_groups->sortBy('food_group_de') as $food_group)
                <option value="{{ $food_group->id }}" {{ $incredient->food_group_id == $food_group->id ? 'selected' : '' }}>
                    {{ $food_group->food_group_de }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="grocery_division">Abteilung</label>
            <select class="custom-select" id="grocery_division" name="grocery_division_id">
                <option value=""></option>
                @foreach($grocery_divisions->sortBy('division_de') as $grocery_division)
                <option value="{{ $grocery_division->id }}"
                    {{ $incredient->grocery_division_id == $grocery_division->id ? 'selected' : '' }}>
                    {{ $grocery_division->division_de }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Speichern">
        <input type="button" class="btn btn-dark" onclick="location.href='{{ route('incredients') }}'; return false;" value="Abbrechen">
    </form>

    {{-- Delete button needs an own form to change POST method into "DELETE" --}}
    <form class="inline-block" method="POST" action="{{ route('incredients.delete', [$incredient->id]) }}">
        @csrf
        @method('DELETE')
        <input type="submit" name="submitted" class="btn btn-danger"
            onclick="return confirm('{{ $incredient->incredient_de }} endgültig löschen?')" value="Löschen">
    </form>
</main>

@endsection
