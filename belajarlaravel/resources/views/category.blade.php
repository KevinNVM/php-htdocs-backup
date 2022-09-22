@extends('layouts.main')

@section('container')
    <section class="posts">
        <h1>Post Category : {{ $category }}</h1>
        @foreach ($posts as $post)
            <div class="container mt-4">
                <article>
                    <a href="/posts/{{ $post->slug }}">
                        <h2>{{ $post->title }}</h2>
                    </a>
                    <h6>Posted By : {{ $post->author }}</h6>
                    <p>{{ $post->excerpt }}</p>
                </article>
            </div>
        @endforeach
    </section>
@endsection
