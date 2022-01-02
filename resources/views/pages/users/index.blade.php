@extends('layouts.dashboard')
@section('dashboard-title', 'Users list')

@section('dashboard-content')

    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('dashboard-title')</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/users/create">
                        <button type="button" class="btn btn-success">Add new user</button>
                    </a>
                </div>
            </div>
        </div>

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
                        <a href="/users/{{ $user->id }}/edit">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="far fa-edit"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <div class="row">
                            <form action="/users/{{ $user->id }}" method="post">
                                @method('DELETE')
                                <button class="btn-sm btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                @csrf
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    @include('layouts.userEditModalForm')

@endsection


