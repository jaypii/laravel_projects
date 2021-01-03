@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 mt-3">
            <div>
                <h2>Laravel 8 CRUD Example</h2>
            </div>
            <div class="float-md-end">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
         </div>
    @endif

    <table class="table table-striped mt-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
    
@endsection