@extends('layouts.app')
@section('title', 'Neues Rezept')
@section('content')
<header>
    <h1>Neues Rezept eingeben</h1>
</header>
{{ $courses }}<br>
{{ $dish_types }}<br>
{{ $cookbooks }}<br>

    <main>
    <form  method="POST" action="{{ route("recipes.store") }}">

        @csrf

        <div class="form-group">
          <label for="recipe_name">Rezept</label>
          <input
              type="text"
              class="form-control"
              name="recipe_name"
              id="recipe_name"
              placeholder="Rezeptname"
              value="{{ old('recipe_name') }}">
          @error('recipe_name')
             <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="preparation_time">Zubereitungszeit in Minuten</label>
          <input
              type="text"
              class="form-control"
              name="preparation_time"
              id="preparation_time"
              placeholder="Zubereitungszeit"
              value="{{ old('preparation_time') }}">
          @error('preparation_time')
             <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-4">
          <label for="cookbook">Kochbuch:</label>
          <input list='cookbooks'
                 type="search"
                 name="cookbook"
                 placeholder="Kochbuch"
                 autocomplete="off">
              <datalist id="cookbooks">
                  @foreach($cookbooks->sortBy('title') as $cookbook)
                      <option value="{{ $cookbook->title }}">
                  @endforeach
              </datalist>
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
    </main>

@endsection
