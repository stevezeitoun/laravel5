<!DOCTYPE html>
<html lang=" {{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="./css/custom.css">
    </head>
    <body>
        @foreach($posts as $post)
        <div class="post-container">
        <h3><a href="{{ URL::action('PostController@view', $post->id)}}">{{ $post->title }}</a></h3>
        <p> {{ $post->content }}</p>
        <i>{{ $post->user->name }}</i>
        </div>

        @endforeach
    </body>
</html>
