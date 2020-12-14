@extends('layouts.app')
@section('title', 'Zutaten')

@section('content')

<head>
    <h1>Zutatenliste</h1>
</head>
<main>
    <p>Neue Zutat hinzufügen <a href="{{ route('incredients.create') }}"><span><i class="fas fa-plus-square"></i></span></a></p>

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
                {{ $incredient->grocery_division->id }}
            </td>
            <td>
                <a href="{{ route('incredients.edit', [$incredient->id]) }}"><span><i class="fas fa-pen"></i></span></a>&nbsp;&nbsp;
                <form class="form-inline" method="POST" action="{{ route('incredients.delete', [$incredient->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="glyphicon-button"><i class="fas fa-trash-alt"></i></button>
                </form>
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
