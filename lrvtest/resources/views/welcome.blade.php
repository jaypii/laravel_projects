@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <div class="row">
            <div class="col-md-8">         
                <div class="card">
                    <div class="card-body">
                        <coin-add-component></coin-add-component>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        Whats Up!
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <chart-component></chart-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

