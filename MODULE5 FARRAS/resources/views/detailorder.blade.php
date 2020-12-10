@extends('main')

@section('title', 'EAD Inventory Management | Order Detail')

@section('content')

    <h1 style="text-align: center">Order</h1>

    <div class="card mb-3" style="width: 100%; height: 500px; padding: 20px; overflow: auto">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img height="450px" class="card-img" alt="..." src="{{ asset('products/'.$product->img_path)}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Stock : {{ $product->stock }}</p>
                    <h2 class="card-text"> Price: ${{ $product->price }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="margin: 50px">

        <h1 style="text-align: center">Buyer Information</h1>

    <form style="padding: 40px" action="/orders/detail/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Input Name Here" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="number" name="contact" placeholder="Input Phone Number Here" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" placeholder="How much would you like to buy?" class="form-control" required>
        </div>

        <button class="btn btn-success" type="submit">Submit</button>
    </form>
    </div>
@endsection