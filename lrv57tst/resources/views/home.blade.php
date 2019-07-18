@extends('layouts.app')

@section('topnav')
<li class="nav-item active">
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="products">Products </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="nwn2chars">NWN2 Chars</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="pagination">Pagination </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="submit">Add Link </a>
</li>
@endsection

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Welcome</h1>
    <p class="lead">This is a simple Laravel (v {{ App::VERSION() }}) app, with routing</p>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card mt-2 p-2">
            <strong>Some interesting links</strong>
            <div class="list-group">
                <a href="https://laravel.com/docs" class="list-group-item list-group-item-action" target="_blank">Documentation</a>
                <a href="https://laracasts.com" class="list-group-item list-group-item-action" target="_blank">Laracasts</a>
                <a href="https://laravel-news.com" class="list-group-item list-group-item-action" target="_blank">News</a>
                <a href="https://nova.laravel.com" class="list-group-item list-group-item-action" target="_blank">Nova</a>
                <a href="https://forge.laravel.com" class="list-group-item list-group-item-action" target="_blank">Forge</a>
                <a href="https://github.com/laravel/laravel" class="list-group-item list-group-item-action" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-7">
        <div class="card mt-2 p-2">
            <h5>Using a component</h5>
            @alert
                <strong>Whoops!</strong> Something went wrong!
            @endalert
        </div>
        <div class="card mt-2 p-2">
            <h5>Linklist (random link elements)</h5>
            <div class="list-group">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="list-group-item list-group-item-action" target="_blank">{{ $link->title }}</a>
            @endforeach
            </div>
        </div>  
    </div>

    <div class="col-md-3">
        <div class="card mt-2 p-2">
            Empty Card 1
        </div>
        <div class="card mt-2 p-2">
            Empty Card 2
        </div>
        <div class="card mt-2 p-2">
            Empty Card 3
        </div>
    </div>
</div>
@endsection