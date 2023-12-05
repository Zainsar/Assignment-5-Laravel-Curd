@extends('layouts.app')

@section('main')
    <div class="container">
        <div style="text-align:end">
            <a href="{{ route('products.create') }}" class="btn btn-dark mt-2">New product</a>
        </div>

        <div class="table-responsive mt-3">
            <table
                class="table text-center
                table-hover	
                table-borderless
          table-dark
          align-middle">
                <thead>
                    <caption>Product Details</caption>
                    <tr>
                        <th>S.no</th>
                        <th>Products</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td><a href="products/{{ $product->id }}/show"
                                    class="text-light text-decoration-none">{{ $product->name }}</a></td>
                            <td class="col-sm-8">{{ $product->description }}</td>
                            <td><img src="productsimage/{{ $product->image }}" width="50px" height="50px"
                                    class="rounded-circle"></td>
                            <td>
                                <a href="products/{{ $product->id }}/edit" class="btn btn-light btn-sm">Edit</a>
                                <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>

    </main>
@endsection
