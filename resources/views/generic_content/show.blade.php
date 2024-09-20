@extends('layouts.app')

@section('content')
    <h1>Generic Content Details</h1>

    <div>
        <strong>Key:</strong> {{ $content->key }}
    </div>
    <div>
        <strong>Value:</strong> {{ $content->value }}
    </div>

    <a href="{{ route('generic-content.index') }}">Back to list</a>
@endsection
