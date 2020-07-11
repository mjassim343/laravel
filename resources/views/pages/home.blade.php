
    @extends('layouts.app')


    @section('title','Home page')


    @section('content')
    <div class="jumbotron">
    <h1 class="display-4">Welcome {{ $name }}</h1>
    <p class="lead">{{ $tag }}</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    @if($hour < 12 && $hour > 12)
    <p class="alert alert-success">good morning</p>
    @elseif($hour >= 20)
    <p class="alert alert-success">good night</p>
    @elseif($hour > 17)
    <p class="alert alert-success">good evening</p>
    @elseif($hour > 11)
    <p class="alert alert-success">good afternoon</p>
    @endif
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    <div class="card-deck mb-8">
    <div class="card">
        <img src="https://cdn.dnaindia.com/sites/default/files/styles/half/public/2020/06/23/910417-apple-ios.jpg" height="230px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Mobile application</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZn66LfEIq-HTFmBn5JsAk-N3fhxvmjcMASA&usqp=CAU" height="230px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Web application</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/mac-459196__340.jpg" height="230px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">SEO and more</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    </div>
    @endsection

    
