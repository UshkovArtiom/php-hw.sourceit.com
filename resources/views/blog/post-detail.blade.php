@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
                <p class="card-text">{{ $post->detail_text }}</p>
                <a href="{{ route('blog') }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection