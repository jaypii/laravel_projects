@extends('layouts.app')

@section('content')
<h2>Edit Book</h2>
<div class="card">
   <div class="card-body">
      @if ($errors->any())
         <div class="alert alert-danger m-2">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
         </div><br />
      @endif
      <form method="post" action="{{ route('books.update', $book->id) }}">
         <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="name">Book Name:</label>
            <input type="text" class="form-control" name="book_name" value="{{$book->book_name}}"/>
         </div>
         <div class="form-group">
            <label for="price">Book ISBN Number :</label>
            <input type="text" class="form-control" name="isbn_no" value="{{$book->isbn_no}}"/>
         </div>
         <div class="form-group">
            <label for="quantity">Book Price :</label>
            <input type="number" class="form-control" name="book_price" value="{{$book->book_price}}"/>
         </div>
         <button type="submit" class="btn btn-primary">Update Book</button>
      </form>
   </div>
</div>
@endsection