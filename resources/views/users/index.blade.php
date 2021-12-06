<h1>Users</h1>

@foreach($users as $user)
    <p>{{ $user->id }}</p>
    <p>{{ $user->name }}</p>
@endforeach
