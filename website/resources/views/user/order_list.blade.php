@extends('layouts.master')

@section('title')
    OCPS, {{ $customer->FullName }}'s Order History
@endsection

@section('content')
    <br>
    <h3>Order List</h3>
    <br>
    <div class="list-header row">
        <div class="col-2"><h5>Order ID</h5></div>
        <div class="col-2"><h5>Product Name</h5></div>
        <div class="col-2"><h5>Store</h5></div>
        <div class="col-2"><h5>Total Price</h5></div>
        <div class="col-2"><h5>Status</h5></div>
        <div class="col-2"><h5>Date</h5></div>
    </div>
    <hr>
    @foreach ($customer->Transactions as $transaction)
        <div class="item transaction row" data-content="{{ $transaction->TransactionStatus }}">
            <div class="col-2"><p>{{ $transaction->id }}</p></div>
            <div class="col-2"><p>{{ $transaction->Product->ProductName }}</p></div>
            <div class="col-2"><p>{{ $transaction->Store->Name  }}</p></div>
            <div class="col-2"><p>${{ $transaction->TotalPrice }}</p></div>
            <div class="col-2"><p>{{ $transaction->TransactionStatus }}</p></div>
            <div class="col-2"><p>{{ $transaction->TransactionDate->diffForHumans() }}</p></div>
        </div>
    @endforeach
@endsection