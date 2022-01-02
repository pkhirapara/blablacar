@extends('layouts.dashboard')
@section('dashboard-title', 'Rides list')

@section('dashboard-content')

    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('dashboard-title')</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/rides/create">
                        <button type="button" class="btn btn-success">Add new ride</button>
                    </a>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User_id</th>
                <th scope="col">Starting Point</th>
                <th scope="col">Destination Point</th>
                <th scope="col">Time</th>
                <th scope="col">Booked</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rides as $ride)
                <tr>
                    <td>{{ $ride->id }}</td>
                    <td>{{ $ride->user_id }}</td>
                    <td><a href="/rides/{{ $ride->id }}">{{ $ride->starting_point }}</a></td>
                    <td>{{ $ride->destination_point }}</td>
                    <td>{{ $ride->time }}</td>
                    <td>{{ $ride->is_booked ? "Yes" : "No" }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="far fa-edit"></i>
                        </button>
                    </td>
                    <td>
                        <div class="row">
                            <form action="/rides/{{ $ride->id }}" method="post">
                                @method('DELETE')
                                <button class="btn btn-danger">
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

    @include('layouts.rideEditModalForm')

@endsection

