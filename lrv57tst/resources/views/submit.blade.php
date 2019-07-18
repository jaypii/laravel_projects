@extends('layouts.app')

@section('topnav')
<li class="nav-item">
    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="#">Add Link</a>
</li>
@endsection
@section('header')
<div class="card mt-2 p-2 bg-light">
    <h3>Submit a link</h3>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card mt-2 p-2 bg-light">
        <form action="/submit" method="post">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Please fix the following errors
            </div>
        @endif

        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
            @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
            <label for="url">Url</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
            @if($errors->has('url'))
                <span class="help-block">{{ $errors->first('url') }}</span>
             @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    <div class="col">
        <div class="card mt-2 p-2">
            Empty card
        </div>
    </div>
</div>
@endsection