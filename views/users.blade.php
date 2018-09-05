@extends ('layout')
@section('content')
    <div class="container">
        <h1>Users page</h1>
        @foreach ($users as $user)
            <p>{{ $user['name'] . ': ' . $user['email'] }}</p>
        @endforeach
    </div>
@endsection