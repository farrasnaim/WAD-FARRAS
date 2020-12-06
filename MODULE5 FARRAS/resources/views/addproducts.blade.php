@extends('main')

@section('title', 'EAD Inventory Management | Add Product')

@section('container')
<form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="container">
                <h2> Add Product </h2>
                <table class="table">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Product Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Input Product Name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Price</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text">$USD</div>
                            <input type="number" name="price" placeholder="Input Product Price" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea"
                            placeholder="Input Product Description" rows="3" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" placeholder="Input Product Stock" class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Product Image</label>
                        <input type="file" class="form-control-file" name="image" required>
                    </div>
                    <button class="btn btn-secondary"> Submit </button>
            </div>
        </div>
    </div>
    </div>
</form>
@endsection
