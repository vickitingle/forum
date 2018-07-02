@extends('layouts.app')

@section('content')
@component('admin/menu')
@endcomponent
<div class="container">
    <div class="container text-center">
        <h2>Forums</h2>
    </div>
    @if ($messages && !is_null($messageType))
        <div class="messages">
        <div class="alert alert-@php echo $messageType @endphp" role="alert">
            {{$messages}}
        </div>
        </div>
    @endif
    <div class="col-sm-4">
        <a class="btn btn-primary" href="/admin/forums/create" role="button">Create New Forum</a>
    </div>

    <div class="forums_list container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forums as $forum)
                    <tr>
                        <th scope="row">{{ $forum->id }}</th>
                        <td>{{ $forum->name }}</td>
                        <td>{{ $forum->created_at}}</td>
                        <td>Edit</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
        
</div>
@endsection