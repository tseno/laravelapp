@extends('layouts.laravelapp')

@section('title', 'Edit')

@section('content')

@if (count($errors) > 0)
<p>エラーがあります。</p>
@endif


<form method="post" action="{{ '/person/' . $person->id }}" class="form-horizontal" style="display:inline;">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $person->id }}">

    @include('person.form')

    <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</form>
<form action="{{ '/person/'. $person->id }}" method="post" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        {{ __('Delete') }}
    </button>
</form>
<a class="btn btn-info" href="{{ '/person' }}">{{ __('Index') }}</a>

@endsection
