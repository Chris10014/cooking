@extends('layouts.app')
@section('title', 'Zutaten')

@section('content')

<header>
    <h1>Zutat {{ $incredient->incredient_de }}</h1>
</header>
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
                    {{-- Check first with php ternery shorthand whether division != null --}}
                    {{ $incredient->grocery_division->division_de ?? "" }}
                </td>
                <td>
                    <a href="{{ route('incredients.edit', [$incredient->id]) }}"><span><i class="fas fa-pen"></i></span></a>
                    </form>
                </td>
            </tr>
        </tbody>




    </table>
</main>

@endsection
