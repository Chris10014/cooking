@extends('layouts.app')

@section('title', "Authoren")

@section('content')
<header>
    <h1>Authoren</h1>
</header>
<main>
    <table>
        <thead>
            <tr>
                <th>Vorname</th>
                <th>Nachname</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>
                    {{ $author->name }}
                </td>
                <td>
                    {{ $author->first_name }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
