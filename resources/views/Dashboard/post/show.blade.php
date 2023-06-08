@extends('Dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h1 class ="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts/" class = "btn btn-primary"><span data-feather ="arrow-left"></span> Kembali ke Postingan</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather ="edit"></span> Edit</a>
                <form class ="d-inline" action="/dashboard/posts/{{ $post->slug }}" method = "post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Apakah yakin ingin menghapus?')" ><span data-feather ="x-circle"></span>Hapus</button>
                </form>

                @if($post->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img src="{{ asset("storage/" .$post->image) }}" alt="" class = "img-fluid mb-3 mt-3">
                    </div>

                @else
                    <img src="https://source.unsplash.com/1100x400/?{{ $post->category }}" alt="" class = "img-fluid mb-3 mt-3">
                @endif
                    <div class="fs-5">{!! $post->body !!}</div>
            </div>
        </div>
    </div>
@endsection
