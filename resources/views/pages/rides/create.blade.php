@extends('layouts.default')

@section('title', 'Create')

@section('content')

    <form action="/rides" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="container w-25 mt-5">
                    <strong>Add new ride</strong>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User id</label>
                        <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id') }}">
                        @error('user_id') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="starting_point" class="form-label">Starting point</label>
                        <input type="text" name="starting_point" class="form-control" id="starting_point" value="{{ old('starting_point') }}">
                        @error('starting_point') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="destination_point" class="form-label">Destination point</label>
                        <input type="text" name="destination_point" class="form-control" id="destination_point" value="{{ old('destination_point') }}">
                        @error('destination_point') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="number" name="time" class="form-control" id="time" value="{{ old('time') }}">
                        @error('time') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="is_booked" class="form-label">Booked</label>
                        <input type="number" name="is_booked" class="form-control" id="is_booked" value="{{ old('is_booked') }}">
                        @error('is_booked') <p style="color: red;">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create New Ride</button>
                </div>
            </div>
        </div>
    </form>
@endsection


