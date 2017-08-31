<!DOCTYPE html>
<html lang=" {{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="./css/custom.css">
    </head>
    <body>
        <a href="{{ URL::action('PostController@index') }}">Retour a la liste</a>
        <h1>{{ $post->title}}</h1>
        <p> {{ $post->content}}</p>
        <i> {{$post->user->name}} {{$post->user->firstname}}</i>
        <p>
            <a href="{{ URL::action('PostController@edit', $post->id)}}" class="button">Editer</a>
        </p>
    </body>
