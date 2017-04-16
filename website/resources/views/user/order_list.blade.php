@extends('layouts.master')

@section('title')
    OCPS {{ $customer->name }} Order List
@endsection

@section('content')
    <h4>Order List</h4>
    @foreach ($orders as $order)
        <div class="order-item container">
            <div class="col-2">
                <img class="product-image" href={{ $order->productImage }}>
            </div>
            <div class="order-info col-10">
                <h4 class="order-id">{{ $order->id }}</h4>
                <p class="product-name">{{ $order->productName }}</p>
                <p class="store">{{ $order->storeName }}</p>
                <p class="price">{{ $order->price }}</p>
                <p class="time">{{ $order->time }}</p>
            </div>
        </div>
    @endforeach
@endsection