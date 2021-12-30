@extends('layouts.default')

@section('title', 'Users')

@section('content')

    <div class="container">
        <h2>Users</h2>
        <a href="/users/create">Add new user</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Created_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

