@extends('layouts.default')

@section('title', 'Ride Show')

@section('content')

    <h1>Rides details</h1>

    <div>
        <a href="/users">< Back</a>
    </div>

    <strong>Starting Point</strong>
    <p>{{ $ride->starting_point }}</p>

    <strong>Destination point</strong>
    <p>{{ $ride->destination_point }}</p>

    <strong>Time</strong>
    <p>{{ $ride->time }}</p>

    <strong>Booked</strong>
    <p>{{ $ride->is_booked }}</p>

    <div>
        <a href="/rides/{{ $ride->id }}/edit">Edit</a>

        <form action="/rides/{{ $ride->id }}" method="post">
            @method('DELETE')

            <button>Delete</button>
            @csrf
        </form>

    </div>

@endsection

