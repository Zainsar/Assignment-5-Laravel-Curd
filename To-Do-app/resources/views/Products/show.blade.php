@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4">
                    <img class="card-img-top rounded" src="/productsimage/{{ $product->image }}" height="500" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Name : {{ $product->name }}</h4>
                        <p class="card-text"><i> <b> Description : </b> {{ $product->description }}</i></p>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
