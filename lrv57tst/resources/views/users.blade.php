@extends('layouts.app')

@section('topnav')
<li class="nav-item">
    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="pagination">Pagination </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="submit">Add Link</a>
</li>
@endsection

@section('header')
    <div class="card mt-2 p-2 bg-light">
        <h2>Laravel 5.8 - Pagination Example</h2>
    </div>
@endsection

@section('content')
<div class="card mt-2 p-2">
    <table class="table table-hover">
        <thead>
            <th>@sortablelink('id','ID')</th>
            <th>@sortablelink('name','Name')</th>
            <th>Email</th>
        </thead>

        @foreach($users as $user)
        <tbody>
            <td><strong>{{ $user->id }}</strong></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tbody>
        @endforeach
    </table>

    {{ $users->onEachSide(1)->links() }}
</div>
@endsection