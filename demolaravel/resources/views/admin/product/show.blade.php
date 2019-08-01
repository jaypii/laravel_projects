@extends('layouts.app')
@section('content')
<div class="row">
   <div class="col-md-8">
      <div class="card">
         <h3 class="card-header">{{ $product->name }} </h3>
         <div class="card-body">
            <p>{{ $product->description }}</p>
            <p class="text-right">Preis:&nbsp;<strong>{{ number_format(($product->price/100), 2) }} CHF</strong></p>
         </div>
      </div>
      <p class="mt-2"><a class="btn btn-primary" href="/admin/product" role="button">Back</a></p>
   </div>
   <div class="col-md-4">
      <div class="card bg-light">
         <div class="card-body">
            Empty card
         </div>
      </div>
   </div>
</div>
@endsection 