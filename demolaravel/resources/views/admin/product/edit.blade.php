@extends('layouts.app')
@section('content')
<div class="row">
   <div class="col-md-8 col-md-offset-2">
      <div class="card">
         <h4 class="card-header">{{ $product->name }} bearbeiten</h4>
         <div class="card-body">
            @if($errors->any())
               <div class="alert alert-danger" role="alert">
               <ul>@foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
               </div>
            @endif
            <form action="/admin/product/{{ $product->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group"><label for="name">Name</label> <input id="name" class="form-control" name="name" required="" type="text" value="{{ $product->name }}" placeholder="Produkt Name"></div>
            <div class="form-group"><label for="description">Beschreibung</label> <textarea id="description" class="form-control" name="description" required="" rows="3">{{ $product->description }}</textarea></div>
            <div class="form-group"><label for="price">Preis (in Cent)</label> <input id="price" class="form-control" name="price" required="" type="text" value="{{ $product->price }}" placeholder="Produkt Preis in Rappen"></div>
            <button class="btn btn-success" type="submit">Produkt aktualisieren</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection