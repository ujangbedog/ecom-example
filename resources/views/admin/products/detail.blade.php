@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/admin/products">Kembali</a>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ url('/image/view/' . $detail['image_url']) }}" class="img w-100">
            </div>
            <div class="col-md-6">
                <h3>{{ $detail['name'] }}</h3>
                <hr>
                <h4>Rp {{ $detail['price'] }}</h4>
                <p class="font-weight-bold">Deskripsi</p>
                <p>{{ $detail['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
