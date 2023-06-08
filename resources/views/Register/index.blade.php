@extends('layouts.main')
@section('container')
    <div class="row justify-content-center pt-5">
        <div class="col-lg-6">
            <main class="form-registation">
                <form action = "/register" method="post">
                    @csrf
                    <h1 class="h3 mb-4 fw-normal ">Sign Up</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                <smal><p class = "d-block mt-2 text-decoration-none">Sudah Register? <a href="/login" >Login</a></p></smal>
            </main>
        </div>
    </div>


@endsection
