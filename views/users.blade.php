@extends ('layout')
@section('content')
    <div class="container">
        <h1>Users page</h1>
        @foreach ($users as $user)
            <p><a href="/public/users/{{ $user['id'] }}">{{ $user['name'] }}</a>: {{ $user['email'] }}</p>
        @endforeach
    </div>
@endsection