@extends('layouts.laravelapp')

@section('title', 'Edit')

@section('content')

    @if (count($errors) > 0)
    <div>
        <ut>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ut>
    </div>
    @endif

    <form method="post" action="{{ '/person/' . $person->id }}" class="form-horizontal"  style="display:inline;">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $person->id }}">

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $person->name) }}">
        </div>
        <div class="form-group">
            <label for="mail">{{ __('Mail') }}</label>
            <input type="text" id="mail" name="mail" class="form-control" value="{{ old('mail', $person->mail) }}">
        </div>
        <div class="form-group">
            <label for="age">{{ __('Age') }}</label>
            <input type="text" id="age" name="age" class="form-control" value="{{ old('age', $person->age) }}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
    <form action="{{ '/person/'. $person->id }}" method="post"  style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            {{ __('Delete') }}
        </button>
    </form>
    <a class="btn btn-info" href="{{ '/person' }}">{{ __('Index') }}</a>

@endsection
