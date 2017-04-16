@extends('layouts.master')

@section('title')
    OCPS Product List
@endsection

@section('content')
    <div class="col-3">
        <form class="filter">
            <div class="product-kind"></div>
            <div class="price"></div>
            <div class="stores"></div>
        </form>
    </div>
    <div class="col-9">
        @foreach ($products as $product)
            <div class="product-item">
                <div class="product-info">
                    <h3 class="name">{{ $product->name }}</h3>
                    <p class="kind">{{ $product->kind }}</p>
                    <p class="store">{{ $product-storeName }}</p>
                </div>
                <p class="price">
                    {{ $product->price }}
                </p>
                <div class="action">
                    <a class="purchase btn btn-primary">Purchase</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection