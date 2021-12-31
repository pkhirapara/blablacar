@extends('layouts.dashboard')
@section('dashboard-title', 'Users list')

@section('dashboard-content')


    <div class="container">
        <a href="/users/create">Add new user</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Created_at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Edit
                        </button>
                    </td>
                    <td>
                        <div class="row">
                            <form action="/users/{{ $user->id }}" method="post">
                                @method('DELETE')

                                <button type="button" class="btn-sm btn-danger">Delete</button>
                                @csrf
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    @include('layouts.testModal')

@endsection


