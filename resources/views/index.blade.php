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
            <div class="main container">
                @foreach ($forums as $forum)
                    <div class="forum row">
                        <div class="col-sm">
                            <a href="forum/{{ $forum->id }}"><h2>{{ $forum->name }}</h2></a>
                        </div>
                        <div class="col-sm">
                            Last posted in: {{ $forum->updated_at }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
    </body>
</html>