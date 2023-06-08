@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>

                <p>By. <a href="/blog?author={{ $post->author->username }} " class="text-decoration-none">
                        {{ $post->author->name }} </a> in
                    <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                @if($post->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img src="{{ asset("storage/" .$post->image) }}" alt="" class = "img-fluid mb-3">
                    </div>

                @else
                    <img src="https://source.unsplash.com/1100x400/?{{ $post->category }}" alt="" class = "img-fluid mb-3 mt-3">
                @endif

                <div class="fs-5">{!! $post->body !!}</div>



                <a href="/blog" class="text-decoration-none text-black">
                    <img src="https://img.icons8.com/pastel-glyph/30/000000/circled-left.png"/> Back to Blog
                </a>
            </div>
        </div>
    </div>

@endsection


