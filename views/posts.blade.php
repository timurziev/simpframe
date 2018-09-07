@extends ('layout')
@section('content')
    <div class="container">
        <h1>Posts page</h1>
        @foreach ($posts as $post)
            <a href="/public/posts/{{ $post['id'] }}">{{ $post['title'] }}</a>
            <p>{{ $post['text'] }}</p>
        @endforeach
    </div>
@endsection