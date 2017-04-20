@extends('layouts.master')

@section('title')
    OCPS, {{ $customer->FullName }}'s Order History
@endsection

@section('content')
    <h4>Order List</h4>
{{--    <p>{{ $transactions }}</p>--}}
    @foreach ($customer->Transactions as $order)
        {{--<p>{{ $order }}</p>--}}
        <div class="order-item container">
            <div class="order-info col-10">
                <h4 class="order-id">{{ $order->id }}</h4>
                <p class="product-name">{{ $order->Product->ProductName }}</p>
                <p class="store">{{ $order->Store->Name }}</p>
                <p class="price">{{ $order->TotalPrice }}</p>
                <p class="status">{{ $order->TransactionStatus }}</p>
                <p class="time">{{ $order->TransactionDate }}</p>
            </div>
        </div>
    @endforeach
@endsection