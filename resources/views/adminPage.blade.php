@extends('layouts.app')
@section('headItem')
<title>Holoshop</title>
@endsection
@section('content')
        <h1> welcome Admin {{ Auth::user()->username }} </h1>
        
        <button class="btn btn-secondary">        
                <a href="http://127.0.0.1:8000/admin" class="text-dark"> click to go to the real admin page</a>
        </button>

        <button class="btn btn-secondary">        
                <a href="http://127.0.0.1:8000/index/users" class="text-dark"> click to go as a user</a>
        </button>
@endsection