@extends('layouts.app')

@section('topnav')
<li class="nav-item">
    <a class="nav-link" href="/">Home </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="products">Products </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="pagination">Pagination </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="submit">Add Link </a>
</li>
@endsection

@section('header')
    <div class="card mt-2 p-2 bg-light">
        <h2>Add new product</h2>
    </div>
@endsection

@section('content')
    <div class="card mt-2 p-2 bg-light">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-right">
                    <a class="btn btn-sm btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>

        @endif

        <!-- Create Form -->
        <form action="{{ route('products.store') }}" method="POST">

            @csrf
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>    
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection