@extends('layouts.app')

@section('content')
@component('admin/menu')
@endcomponent
<div class="container">
    <div class="container text-center">
        <h2>Create New Forum</h2>
    </div>

    <form action="/admin/forums/save" type="POST">
        <div class="form-group">
            <label for="forum_name">Forum Name</label>
            <input type="text" class="form-control" name="name" id="forum_name" />
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
        
</div>
@endsection