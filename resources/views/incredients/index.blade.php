@extends('layouts.app')
@section('title', 'Zutaten')

@section('content')

<header>
    <h1>Zutatenliste</h1>
</header>
<main>
    <p>Neue Zutat hinzufügen <a href="{{ route('incredients.create') }}"><span><i class="fas fa-plus-square"></i></span></a></p>

{{  session('test') }}

    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gruppe</th>
                <th>Abteilung</th>
                <th>Aktion</th>
            </tr>
        </thead>
       @foreach($incredients->sortBy->incredient_de as $incredient)
        <tr>
            <td>
                {{ $incredient->incredient_de }}
            </td>
            <td>
                {{ $incredient->food_group->food_group_de }}
            </td>
            <td>
                {{-- Check first with php ternery shorthand whether division != null --}}
                {{ $incredient->grocery_division->division_de ?? "" }}
            </td>
            <td>
                <a href="{{ route('incredients.edit', [$incredient->id]) }}"><span><i class="fas fa-pen"></i></span></a>
            </td>
        </tr>

        @endforeach

        <tbody>
            <tr>
                <td>

                </td>
            </tr>

        </tbody>
    </table>
</main>

@endsection
