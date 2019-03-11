@extends('layouts.laravelapp')

@section('title', 'Index')

@section('content')

    <a class="btn btn-primary" href="/person/create">{{ __('New') }}</a>
    <table class="table tab-content table-bordered table-hover table-striped">
        <tr>
            <th> Name</th>
            <th> Mail</th>
            <th> Age</th>
            <th></th>
        </tr>
        @foreach ($people as $person)
            <tr>
                <td>{{ $person->name }}
                </td>
                <td>{{ $person->mail }}
                </td>
                <td>{{ $person->age }}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ '/person/' . $person->id}}">{{ __('Show') }}</a>
                    <a class="btn btn-primary" href="{{ '/person/' . $person->id . '/edit'}}">{{ __('Edit') }}</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
