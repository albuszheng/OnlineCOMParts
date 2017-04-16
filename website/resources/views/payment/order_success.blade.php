@extends('layouts.master')

@section('title')
    OCPS Order Successfully
@endsection

@section('content')
    <h2 class="order-id">{{ $transaction->id }}</h2>
    <div class="order-detail row">
        <div class="img col-3">
            <img class="product-image" href={{ $transaction->productImage }}>
        </div>
        <div class="col-9">
            <h3 class="product">{{ $transaction->productName }}</h3>
            <p class="store">Store: {{ $transaction->storeName }}</p>
            <p class="product-kind">{{ $transaction->productKind }}</p>
            <p class="price">Total price: {{ $transaction->price }}</p>
        </div>
    </div>
    <p class="go-back">Click <a href="/product-list">here</a> to continue shopping</p>
@endsection