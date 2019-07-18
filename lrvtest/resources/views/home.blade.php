@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello</h1>
        <p class="lead">This is a simple Laravel (v {{ App::VERSION() }}) app, with routing</p>
    </div>
    <div class="row">
        <div class="col">
            <div class="card p-1">
            col 1
            </div>
        </div>
        <div class="col">
            <div class="card p-1">  
            col 2
            </div>
        </div>
        <div class="col">
            <div class="card p-1">
            col 3
            </div>
        </div>
        <div class="col">
            <div class="card p-1">
            col 4
            </div>
        </div>
    </div>
@endsection
