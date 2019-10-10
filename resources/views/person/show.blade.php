@extends('layouts.laravelapp')

@section('title', 'Show')

@section('content')

@include('person.form', ['readOnly' => true])
<a class="btn btn-info" href="{{ '/person' }}">{{ __('Index') }}</a>
@endsection
