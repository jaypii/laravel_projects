@extends('layouts.app') 
@section('content')
<h2>Produkte</h2>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @foreach($products as $product)
                <h4><a href="/admin/product/{{ $product->id }}">{{ $product->name }}</a></h4>
                <!--
                <form method="POST" action="/admin/product/{{ $product->id }}">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger btn-sm" type="submit" value="X" />
                </form>
                -->
                <hr>
                @endforeach
            </div>
        </div>
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