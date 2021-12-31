@extends('layouts.default')

@section('title', 'Rides')

@section('content')

    <div class="container">
        <h2>Rides</h2>
        <a href="/rides/create">Add new ride</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User_id</th>
                <th scope="col">Starting Point</th>
                <th scope="col">Destination Point</th>
                <th scope="col">Time</th>
                <th scope="col">Booked</th>
                <th scope="col">Edit / Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rides as $ride)
                <tr>
                    <td>{{ $ride->id }}</td>
                    <td>{{ $ride->user_id }}</td>
                    <td>{{ $ride->starting_point }}</td>
                    <td>{{ $ride->destination_point }}</td>
                    <td>{{ $ride->time }}</td>
                    <td>{{ $ride->is_booked ? "Yes" : "No" }}</td>
                    <td>
                        <a href="/users/{{ $ride->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a>

                        <form action="/users/{{ $ride->id }}" method="post">
                            @method('DELETE')

                            <button type="button" class="btn btn-danger">Delete</button>
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

