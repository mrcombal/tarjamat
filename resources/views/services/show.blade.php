@extends('admin.master')

@section('content')
   
    <div class="container">
        <h1>{{ $service->name }}</h1>

        <p><strong>Description:</strong> {{ $service->description }}</p>
        <p><strong>Display Order:</strong> {{ $service->display_order }}</p>
        <p><strong>Icon:</strong> {{ $service->icon }}</p>
        <p><strong>Color:</strong> {{ $service->color }}</p>

        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
