@extends('layouts.app')

@section('content')
<header>
    <h1>Verlage</h1>
</header>
<main>
    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
            <tr>
                <td>
                    {{ $publisher->name }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
<main>

</main>
@endsection
