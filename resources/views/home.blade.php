@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Fake Shop</h1>
            <p>Belanja online murah, aman dan nyaman dari berbagai toko online di Indonesia.</p>
        </div>
        <div class="col-md-12">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text">{{ $product['description'] }}</p>
                                <a href="{{ route('product', $product['id']) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
