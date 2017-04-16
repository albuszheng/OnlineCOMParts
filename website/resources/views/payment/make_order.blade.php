@extends('layouts.master')

@section('title')
    OCPS Make Order
@endsection

@section('content')
    <form class="order-detail">
        <div class="col-7">
            <div class="payment-method">
                <h3>Payment</h3>
                <p>
                    {{ $customer->paymentMethod }}
                </p>
            </div>

            <div class="ship-address">
                <h3>Shipment</h3>
                <p>
                    {{ $customer->shipAddress }}
                </p>
            </div>
            <div class="item">
                <h3>Shipment</h3>
                <p>
                    {{ $product->name }}:
                    <span class="amount">{{ $product->num }}</span>
                </p>
            </div>
        </div>
    </form>
    <div class="col-5">
        <div class="action">
            <h3 class="price">
                Price
            </h3>
            <p class="item-price">Item Price: {{ $product->price }}</p>
            <p class="total-price">Total: {{ ($product->price) * ($product->num) }}</p>
            <input class="" title="Purchase" type="submit">
        </div>
    </div>
@endsection