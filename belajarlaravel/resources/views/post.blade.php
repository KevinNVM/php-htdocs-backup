@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        <article>
            <h2>{{ $post->title }}</h2>
            <h6>By : <a class="link-secondary text-decoration-none"
                    href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> in
                <a class="link-secondary text-decoration-none"
                    href="/categories/{{ $post->category->slug }}">'{{ $post->category->name }}'</a>
            </h6>
            <h6>Posted By : {{ $post->author }}</h6>
            {!! $post->body !!}
        </article>
        <a href="/blog">Kembali</a>
    </div>
@endsection
