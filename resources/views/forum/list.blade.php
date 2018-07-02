<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css" />
    </head>

    <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>{{ $forum->name }}</h2>
            <div class="main container">
                <div class="col-sm-4">
                    <a class="btn btn-primary" href="/post/create/{{ $forum->id }}" role="button">New Post</a>
                </div>
            </div>
        </div>
    @endsection
    </body>
</html>