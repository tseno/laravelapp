@extends('layouts.laravelapp')

@section('title', 'New')

@section('content')

    @if (count($errors) > 0)
    <p>エラーがあります。</p>
    @endif

    <form method="post" action="/person">
        @csrf
        @method('POST')

        @include('person.form')

        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a class="btn btn-info pull-right" href="{{ '/person' }}">{{ __('Index') }}</a>
    </form>

@endsection
