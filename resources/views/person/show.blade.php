@extends('layouts.laravelapp')

@section('title', 'Show')

@section('content')

<div class="form-group">
    <label for="name">{{ __('Name') }}</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ $person->name }}" readonly>
</div>
<div class="form-group">
    <label for="mail">{{ __('Mail') }}</label>
    <input type="text" id="mail" name="mail" class="form-control" value="{{ $person->mail }}" readonly>
</div>
<div class="form-group">
    <label for="age">{{ __('Age') }}</label>
    <input type="text" id="age" name="age" class="form-control" value="{{ $person->age }}" readonly>
</div>
    <a class="btn btn-info" href="{{ '/person' }}">{{ __('Index') }}</a>
@endsection
