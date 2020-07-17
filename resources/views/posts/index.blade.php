@extends('layouts.app')


@section('title','Contact page')


@section('content')
    <div class="jumbotron">
    <h1 class="display-4">Our Blog</h1>
    <p class="lead">Post 1</p>
    <hr class="my-4">
    </div>

    
    <div class="card-deck mb-4">
    @foreach ($posts as $post)
    <div class="card col-sm-3">
        <img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/mac-459196__340.jpg" height="230px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $post -> title }} </h5>
        <p class="card-text">{{ $post -> desc }} </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    @endforeach
    </div>
    {{$posts ->links()}}
    <br>
    <br>
    <br>
@endsection