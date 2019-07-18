@extends('layouts.app')

@section('topnav')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <li class="nav-item active">
                <a href="{{ url('/') }}">Home</a>
            </li>
            @else
            <li class="nav-item">
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}">Register</a>
            </li>
            @endauth
        </div>
    @endif
@endsection

@section('header')
<div class="card mt-2 p-2 bg-light">
    <h2>Welcome to my first Laravel App</h2>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card mt-2 p-2">
            <strong>Some interesting links</strong>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="https://laravel.com/docs" class="nav-link" target="_blank">Documentation</a>
                </li>
                <li class="nav-item">
                    <a href="https://laracasts.com" class="nav-link" target="_blank">Laracasts</a>
                </li>
                <li class="nav-item">
                    <a href="https://laravel-news.com" class="nav-link" target="_blank">News</a>
                </li>
                <li class="nav-item">
                    <a href="https://nova.laravel.com" class="nav-link" target="_blank">Nova</a>
                </li>
                <li class="nav-item">
                    <a href="https://forge.laravel.com" class="nav-link" target="_blank">Forge</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/laravel/laravel" class="nav-link" target="_blank">GitHub</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mt-2 p-2">
            <strong>Using a component</strong>
            @alert
                <strong>Whoops!</strong> Something went wrong!
            @endalert
        </div>  
    </div>
    <div class="col-md-3">
        <div class="card mt-2 p-2">
            Empty card 1
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