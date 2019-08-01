@extends('layouts.app')

@section('content')
<h2>Books</h2>
<div class="card">
    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Book Name</td>
                    <td>ISBN Number</td>
                    <td>Book Price</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->book_name}}</td>
                    <td>{{$book->isbn_no}}</td>
                    <td>$ {{ number_format(($book->book_price/100), 2)}}</td>
                    <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 