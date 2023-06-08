@extends('layouts.main')


@section('container')
    <h1 class = "mb-4">{{ $title }}</h1>

    <div class="row justifi-content-right">
        <div class="col-md-6">
            <form action="/blog">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit"><img src="https://img.icons8.com/ios-glyphs/30/000000/search--v1.png"/></button>
                </div>
            </form>
        </div>
    </div>

    @if($posts->count())
        @if($posts[0]->image)
            <div class="card bg-dark text-info text-center bg-secondary mb-5" style="max-height: 400px;overflow : hidden">
                <img src="{{ asset("storage/" .$posts[0]->image) }}" alt="" class = "card-img" >
                <div class="card-img-overlay img-fluid style " style=";">
                    <div class =" mb-2" style="background-color: rgb(0,0,0,0.7); border-radius: 3px"> <h3 class="card-title fluid" >{{ $posts[0]->title }}</h3>
                        <p>By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }} </a><a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{$posts[0]->created_at->diffForHumans()}}</p></a>
                        <p class="card-text"> {{ $posts[0]->excerpt }}</p>
                    </div>
                    <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-warning">Read More</a>
                </div>
            </div>

        @else
            <div class="card bg-dark text-info text-center bg-secondary mb-5">
                <img src="https://source.unsplash.com/1100x400/?{{ $posts[0]->category }}" class="card-img" alt="...">
                <div class="card-img-overlay img-fluid style " style="overflow : auto;">
                    <div class =" mb-2" style="background-color: rgb(0,0,0,0.7); border-radius: 3px"> <h3 class="card-title fluid" >{{ $posts[0]->title }}</h3>
                        <p>By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }} </a><a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{$posts[0]->created_at->diffForHumans()}}</p></a>
                        <p class="card-text"> {{ $posts[0]->excerpt }}</p>
                    </div>
                    <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-warning">Read More</a>
                </div>
            </div>
        @endif



    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="position-absolut bg-dark p-2 text-white "><a href="/blog?category={{ $post->category->slug }}" class = "text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            @if($post->image)
                                    <img src="{{ asset("storage/" .$post->image) }}" alt="" class = "img-fluid rounded-start">

                            @else
                                <img src="https://source.unsplash.com/150x400/?{{ $post->category }}" class="img-fluid rounded-start" alt="...">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                   <small> By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a>
                                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"></a>
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->slug }}</p>
                                <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>
                                <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More....</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class = "text-center fs-4">No post found</p>
    @endif
    <div class="d-flex justify-content-end" >
        {{ $posts->links() }}
    </div>

@endsection
