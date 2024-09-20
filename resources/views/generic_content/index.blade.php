@extends('layouts.app')

@section('content')
    <h1>Generic Content List</h1>
    <a href="{{ route('generic-content.create') }}">Create New Content</a>

    <ul>
        @foreach ($contents as $content)
            <li>{{ $content->key }}: {{ $content->value }}</li>
        @endforeach
    </ul>
@endsection
