@extends('layouts.app')

@section('content')
    <h1>Edit Generic Content</h1>

    <form action="{{ route('generic-content.update', $content->id) }}" method="POST">
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
