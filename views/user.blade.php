@extends ('layout')
@section('content')
    <div class="container">
        <h1>User page</h1>
        <p>{{ $user['name'] . ': ' . $user['email'] }}</p>
    </div>
@endsection