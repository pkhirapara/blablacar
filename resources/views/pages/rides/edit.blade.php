<h1>Edit rides details</h1>

<form action="/rides/{{ $ride->id }}" method="POST" id="edit-rides">
    @csrf
    <div class="container">
        <div class="row">
            <div class="container w-full mt-5">
                <strong>Add new ride</strong>
                <div class="mb-3">
                    <label for="user_id" class="form-label">User id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $ride->user_id }}">
                    @error('user_id') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="starting_point" class="form-label">Starting point</label>
                    <input type="text" name="starting_point" class="form-control" id="starting_point" value="{{ $ride->starting_point }}">
                    @error('starting_point') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="destination_point" class="form-label">Destination point</label>
                    <input type="text" name="destination_point" class="form-control" id="destination_point" value="{{ $ride->destination_point }}">
                    @error('destination_point') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="number" name="time" class="form-control" id="time" value="{{ $ride->time }}">
                    @error('time') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="is_booked" class="form-label">Booked</label>
                    <input type="number" name="is_booked" class="form-control" id="is_booked" value="{{ $ride->is_booked }}">
                    @error('is_booked') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('edit-rides').addEventListener('submit', function (event) {
        event.stopPropagation();
        return false;
    });
</script>

