@extends('layouts.app')
@section("content")

<div class="my-2">
    @include('message')
</div>
<div class="d-flex justify-content-between">
    <h5>All Products</h5>
    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm rounded-1">Add New Product</a>

</div>

<div class="my-3">
    <table class="table table-striped table-bordered">
<thead>
    <tr>
        <th>Product name</th>
        <th>Product price</th>
        <th>Product quantiny</th>
        <th>product description</th>
        <th>product date created</th>
        <th>product date updated</th>
        <th>Edit | Delete</th>
    </tr>
</thead>
<tbody>

    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quantinty }}</td>
        <td>{{ $product->description  }}</td>
        <td>{{ $product->created_at }}</td>
        <td>{{ $product->updated_at }}</td>
        <td class="d-flex justify-content-around">
            {{-- delete --}}
            <form action="{{ route('product.destroy',$product->id) }}" class="btn" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info btn-sm">Edit</a>
        </td>
    </tr>
        
    @endforeach
</tbody>

    </table>
</div>

@endsection