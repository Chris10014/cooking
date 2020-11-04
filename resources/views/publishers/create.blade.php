@extends('layouts.app');

@section('content')
<header>
    <h1>Neuer Verlag</h1>
</header>
<main>
    <form method="POST" action="{{ route("publishers.store") }}">

        @csrf

        <div class="form-group">
            <label for="name">Verlag</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
</main>

@endsection
