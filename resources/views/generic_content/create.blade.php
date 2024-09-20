@extends('layouts.app')

@section('content')
    <h1>Add Generic Content</h1>

    <form action="{{ route('generic-content.store', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="key">Key</label>
            <input type="text" id="key" name="key" value="{{ $content->key }}" required>
        </div>
        <div>
            <label for="value">Value</label>
            <textarea id="value" name="value" required>{{ $content->value }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
