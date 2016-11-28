@extends('layouts.app')

@section('title', 'Your Proposals')

@section('content')
    @if ($proposals->isEmpty())
        <p>Currently there are no proposals that have been generated for you</p>
    @else
        <ul>
        @foreach($proposals as $proposal)
            <li>{{ $proposal->title }}</li>
        @endforeach
        </ul>
    @endif
@endsection