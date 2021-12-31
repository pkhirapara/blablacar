<h1>Edit users details</h1>

<form action="/users/{{ $user->id }}" method="post" id="edit-users">
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="container w-full mt-5">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                    @error('name') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}">
                    @error('email') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Phone number</label>
                    <input type="text" name="mobile" class="form-control" id="mobile" value="{{ $user->mobile }}">
                    @error('mobile') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">New password (optional)</label>
                    <input type="password" name="new_password" class="form-control" id="new_password" value="">
                    @error('new_password') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Current password</label>
                    <input type="password" name="password" class="form-control" id="password" value="">
                    @error('password') <p style="color: red;">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>

<script>
    document.getElementById('edit-users').addEventListener('submit', function (event) {
        event.stopPropagation();
        return false;
    });
</script>


