@extends('layouts.main')

@section('container')
    <section class="posts">
        <h1>Halaman Blog</h1>
        <div class="container mt-4">
            <ul class="list-group">
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <h4>
                            <a class="text-decoration-none link-dark" href="/categories/{{ $category->slug }}">
                                &raquo; {{ $category->name }}
                            </a>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
