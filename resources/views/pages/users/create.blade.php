@extends('layouts.default')

@section('title', 'Create')

@section('content')

    <form action="/users" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="container w-25 mt-5">
                    <strong>Add new user</strong>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                        @error('name') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
                        @error('email') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Phone number</label>
                        <input type="number" name="mobile" class="form-control" id="mobile" value="{{ old('mobile') }}">
                        @error('mobile') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}">
                        @error('password') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create New User</button>
                </div>
            </div>
        </div>
    </form>
@endsection


