@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content center">
            <div class="col">
                <h2>Edit Produk</h2>
                <br>
                <form action="{{ route('admin.products.update', ['id' => $product['id']]) }}" method="POST"
                    class="d-inline">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Produk"
                            value="{{ $product['name'] }}">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="price" class="form-control" placeholder="Harga"
                            value="{{ $product['price'] }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" cols="30"
                            rows="10">{{ $product['description'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
