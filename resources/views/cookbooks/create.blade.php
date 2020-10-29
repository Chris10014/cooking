@extends('layouts.app')

@section('content')
<header>
    <h1>Neues Kochbuch eingeben</h1>
</header>
    <main>
        <form  method="POST" action="{{ route("cookbooks.store") }}">

            @csrf

        <div class="form-group">
            <label for="title">Titel</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                placeholder="Titel"
                value="{{ old('title') }}">
            @error('title')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="author_id">Author</label>
            <select id="author_id" name="author_id">
                @foreach($authors->sortBy('name') as $author)
                      <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->name }}</option>
                @endforeach
            </select>
            @error('author_id')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="publisher_id">Verlag</label>
            @foreach($publishers->sortBy('name') as $publisher)
            <select id="publisher_id" name="publisher_id">
                <option value="{{ $publisher->id }}">{{ $publisher->name }}<option>
            </select>
            @endforeach
            @error('publisher_id')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </main>
@endsection
