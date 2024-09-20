@extends('admin.master')

@section('content')
    <h1>Add Generic Content</h1>

    <form action="{{ route('generic-content.store') }}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="key">Key</label>
            <input type="text" id="key" name="key"  required>
        </div>
        <div>
            <label for="value">Value</label>
            <textarea id="value" name="value" required></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
