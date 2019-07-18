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
        <div class="row">
            <div class="col-lg-6 margin-tb">
                <h2>Show Product</h2>
            </div>
            <div class="col-lg-6 margin-tb">
                <div class="text-right">
                    <a class="btn btn-sm btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card mt-2 p-2 bg-info">
        <!-- Show Product -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>    
                    {{ $product->detail }}
                </div>
            </div>
        </div>
    </div>
@endsection