@extends('layouts.app')

@section('topnav')
<li class="nav-item">
    <a class="nav-link" href="/">Home </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="#">Products </a>
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
        <h2>Product List</h2>
    </div>
@endsection

@section('content')
<div class="card mt-2 p-2">
    <div class="row mb-2">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <a class="btn btn-sm btn-success" href="{{ route('products.create') }}">Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped mt-2">
        <tr>
            <th>@sortablelink('id','#')</th>
            <th>@sortablelink('name','Name')</th>
            <th>@sortablelink('detail','Details')</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">X</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->appends(request()->except('page'))->render() !!}

</div>
@endsection