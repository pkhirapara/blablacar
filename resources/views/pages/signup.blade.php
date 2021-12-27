@extends('layouts.default')

@section('title', 'Sign up')

@section('content')
    <form>
        <div class="container">
            <div class="row">
                <div class="container w-25 mt-5">
                    <strong>Sign up</strong>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </div>
    </form>
@endsection
