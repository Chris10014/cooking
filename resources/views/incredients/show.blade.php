@extends('layouts.app')
@section('title', 'Zutaten')

@section('content')

<head>
    <h1>Zutat</h1>
</head>
<main>

    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gruppe</th>
                <th>Abteilung</th>
                <th>Aktion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{ $incredient->incredient_de }}
                </td>
                <td>
                    {{ $incredient->food_group->food_group_de }}
                </td>
                <td>
                    {{ $incredient->grocery_division->division_de }}
                </td>
                <td>
                    <a href="{{ route('incredients.edit', [$incredient->id]) }}"><span><i class="fas fa-pen"></i></span></a>&nbsp;&nbsp;<i class="fas fa-trash-alt"></i>
                </td>
            </tr>
        </tbody>




    </table>
</main>

@endsection
