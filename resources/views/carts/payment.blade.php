@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Metode Pembayaran</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">BCA</option>
                        <option value="2">PayPal</option>
                        <option value="3">Mandiri Syariah</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <p>Summary</p>
                <div class="card container">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Total</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-right">{{ $total }}</p>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-4">bayar</button>
                </div>

            </div>
        </div>
    </div>
@endsection
