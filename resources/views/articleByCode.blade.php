<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       <h4> Tags: </h4>
       @foreach ($article->tags as $tag)
       <p> {{$tag->name}} </p>
       @endforeach
       <h1> Post name: {{$article->name}} </h1>
       <h2> Author: {{$article->author}} </h2>
       <p> Content: {{$article->content}} </p>
       <p> Posted on: {{$article->added_on}} </p>
       <p> Post code: {{$article->code}} </p>
       <p> id: {{$article->id}} </p>
       <br><br><br>
    </body>
</html>