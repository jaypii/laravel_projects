@extends('layouts.app')

@section('content')
<h2>Home</h2>
<div class="card">
    <div class="card-body">
        Dies ist eine einfache Laravel (v {{ App::VERSION() }}) Anwendung, Authorisierung ist implementiert.
    </div>
</div>
@endsection