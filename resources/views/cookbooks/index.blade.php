@extends('layouts.app')

@section('content')
<header>
    <h1>Kochbücher</h1>
</header>
    <main>
        <table>
            <thead>
                <th>
                    Titel
                </th>
                <th>
                    Author
                </th>
                <th>
                    Verlag
                </th>
            </thead>
            <tbody>
                @foreach ($cookbooks as $cookbook)
                <tr>
                <td>
                    {{ $cookbook->title }}
                </td>
                <td>
                    {{ $cookbook->author->first_name }} {{ $cookbook->author->name }}
                </td>
                <td>
                    {{ $cookbook->publisher->name }}
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
