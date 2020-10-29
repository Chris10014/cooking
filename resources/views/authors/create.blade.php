@extends('layouts.app');

@section('content')
<header>
    <h1>Neuer Author<h2>
</header>
<main>
    <main>
        <form  method="POST" action="{{ route("authors.store") }}">

            @csrf

            <div class="form-group">
              <label for="first_name">Vorname</label>
              <input
                  type="text"
                  class="form-control"
                  name="first_name"
                  id="first_name"
                  placeholder="Vorname"
                  value="{{ old('first_name') }}">
              @error('first_name')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="name">Nachname</label>
              <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  placeholder="Nachname"
                  value="{{ old('name') }}">
              @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
</main>
@endsection
