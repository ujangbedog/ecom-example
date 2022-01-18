@extends('layouts.app')

@section('content')
    <div class="container col-md-8">
        <div class="row justify-content-center">
            <div class="col">
                <h2>Product</h2>
                <div>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Tambah Produk</a>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td><img src="{{ route('admin.products.image', ['imageName' => $product['image_url']]) }}"
                                            width="100" /></td>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['price'] }}</td>
                                    <td>{{ $product['created_at'] }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.show', ['id' => $product['id']]) }}"
                                            class="btn ">show
                                            detail</a>
                                        <a href="{{ route('admin.products.edit', ['id' => $product['id']]) }}"
                                            class="btn btn-info">Edit</a>
                                        <form action="{{ route('admin.products.destroy', ['id' => $product['id']]) }}"
                                            method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger" type="submit" value="Delete" />
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
