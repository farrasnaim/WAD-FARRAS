@extends('main')

@section('title', 'EAD Inventory Management | Order')

@section('container')
@foreach($product as $product)
<div class="card" style="width: 18rem; float: left;margin: 120px">
    <img src="{{ asset('products/'.$product->img_path)}}" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title text-center">{{ $product->name }}</h5>
        <p class="card-text text-center">{{ $product->description }}</p>
        <h5 class="card-text text-center"> Price: ${{$product->price}}</h5>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a class="btn btn-secondary" href="{{ route('order.create') }}"> Order Now </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
