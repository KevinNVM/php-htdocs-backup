@extends('layouts.main')

@section('container')
    <section class="posts">
        <h1>Halaman Blog</h1>
        @foreach ($posts as $post)
            <div class="container mt-4">
                <article class="border-bottom pb-3">
                    <a class="text-decoration-none" href="/posts/{{ $post->slug }}">
                        <h3>{{ $post->title }}</h3>
                    </a>
                    <h6>Posted By : <a class="link-secondary text-decoration-none"
                            href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> in
                        <a class="link-secondary text-decoration-none"
                            href="/categories/{{ $post->category->slug }}">'{{ $post->category->name }}'</a>
                    </h6>
                    <p>{{ $post->excerpt }}</p>
                    <a class="text-decoration-none link-info" href="/posts/{{ $post->slug }}">Read More...</a>
                </article>
            </div>
        @endforeach
    </section>
@endsection
