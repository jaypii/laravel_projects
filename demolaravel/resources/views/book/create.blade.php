@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header">Add Book</h5>
            <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form action="{{ route('books.store') }}" method="post">
            <div class="form-group">
               @csrf
                <label for="name">Book Name:</label>
                <input id="book_name" class="form-control" name="book_name" type="text" placeholder="Book Name"/>
            </div>
            <div class="form-group">
                <label for="isbn_no">Book ISBN Number:</label> 
                <input type="text" id="isbn_no" class="form-control" name="isbn_no" placeholder="ISBN Number"/>
            </div>
            <div class="form-group">
                <label for="book_price">Book Price:</label> 
                <input id="book_price" class="form-control" name="book_price" type="number" placeholder="Price"/>
            </div>
            <button class="btn btn-primary" type="submit">Create Book</button>
            </form>
        </div>
    </div>
</div>
@endsection