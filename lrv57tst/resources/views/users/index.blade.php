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
<li class="nav-item active">
    <a class="nav-link" href="pagination">Pagination </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="submit">Add Link </a>
</li>
@endsection

@section('header')
    <div class="card mt-2 p-2 bg-light">
        <h2>Laravel 5.7 package for handling column sorting with pagination example</h2>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card mt-2 p-2">
            <table class="table table-bordered">
                <tr>
                    <th>@sortablelink('id')</th>
                    <th>@sortablelink('name')</th>
                    <th>@sortablelink('email')</th>
                    <th>@sortablelink('created_at','Created At')</th>
                </tr>
                @if($users->count())
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
            {!! $users->appends(request()->except('page'))->render() !!}  
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mt-2 p-2">
            <h5>Using a component</h5>
            @alert
                <strong>Whoops!</strong> Something went wrong!
            @endalert
        </div>  
    </div>
</div>
@endsection