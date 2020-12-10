@extends('main')

@section('title', 'EAD Inventory Management | Update Product')

@section('container')
<form action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <br>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="container">
                <h2> Edit Product </h2>
                <table class="table">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Product Name"
                            value="{{$product->name}}" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text">$USD</div>
                            <input type="number" name="price" placeholder="Product Price" class="form-control"
                                value="{{$product->price}}" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" rows="5" placeholder="Product Description" class="form-control"
                            required>{{$product->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" placeholder="Current Product Stock" class="form-control"
                            style="width: 450px" value="{{$product->stock}}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Product Image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </div>
    </div>
</form>
@endsection
