@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <h4 class="card-header">Dashboard</h4>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="bg-orange p-2">You are logged in!</p>
                <div class="row">
                    <div class="col">
                        <p class="lead bg-success p-2">{{ $meme }}</p>
                    </div>
                    <div class="col">
                        <p class="bg-info p-2">Your lucky number:&nbsp;<strong>{{ $luckynr }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
