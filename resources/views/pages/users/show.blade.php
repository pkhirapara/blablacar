@extends('layouts.default')

@section('title', 'User Show')

@section('content')

    <h1>Users details</h1>

    <div>
        <a href="/users">< Back</a>
    </div>

    <strong>Name</strong>
    <p>{{ $user->name }}</p>

    <strong>Email</strong>
    <p>{{ $user->email }}</p>

    <strong>Phone number</strong>
    <p>{{ $user->mobile }}</p>

    <div>
        <a href="/users/{{ $user->id }}/edit">Edit</a>

        <form action="/users/{{ $user->id }}" method="post">
            @method('DELETE')

            <button>Delete</button>
            @csrf
        </form>

    </div>

@endsection

