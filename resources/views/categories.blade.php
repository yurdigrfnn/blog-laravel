@extends('layouts.main')

@section('container')
@section('container')
    <h1>All category</h1>
        <div class="container">
            <div class="row">
                @foreach( $categories as $category)
                <div class="col-sm-6">
                    <div class="card mb-5">
                        <div class="card-body">
                            <img src="https://source.unsplash.com/1100x400/?{{ $category->name }}" alt="" class = "img-fluid">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <a href="/blog?category={{ $category->slug }}" class="btn btn-primary">show</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection

@endsection


