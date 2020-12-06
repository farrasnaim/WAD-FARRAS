@extends('main')

@section('title', 'EAD Inventory Management | Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <a href="{{ route('product.create')}}" type="button" class="btn btn-success my-3">Add Product</a>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $prd)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $prd->name }}</td>
                            <td>{{ $prd->price }}</td>
                            <td>
                                <a href="{{ route('product.edit', [$prd->id]) }}" class="btn btn-primary"> Edit </a>
                                <form action="{{ route('product.destroy', [$prd->id]) }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
