@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="card mb-3">
                <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->preview_text }}</p>
                    <a href="{{route('post-detail', [$post->slug])}}" class="btn btn-primary">Read more...</a>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
@endsection
