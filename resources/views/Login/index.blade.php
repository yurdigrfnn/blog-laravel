@extends('layouts.main')
@section('container')
    <div class="row justify-content-center pt-5">
        <div class="col-md-6">

            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            <main class="form-signin">
            <form action="/login" method ="post">
                @csrf
                <h1 class="h3 mb-4 fw-normal ">Please sign in</h1>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>
                <smal><a href="/register" class = "d-block mt-2 text-decoration-none">Register now</a></smal>
            </main>
        </div>
    </div>


@endsection
