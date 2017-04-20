@extends('dashboard.framework')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Transaction List</li>
    </ol>
    <div class="info-box orders">
        <h4>Transactions</h4>
        <div class="container-fluid">
            <div class="list-header row">
                <div class="col-2"><p>Product Name</p></div>
                <div class="col-2"><p>Customer</p></div>
                <div class="col-2"><p>Date</p></div>
                <div class="col-2"><p>Total Price</p></div>
                <div class="col-2"><p>Status</p></div>
            </div>
            @foreach( $salesperson->Store->Transactions as $transaction)
                <div class="item transaction row" data-content="{{ $transaction->TransactionStatus }}">
                    <div class="col-2"><p>{{ $transaction->Product->ProductName }}</p></div>
                    <div class="col-2"><p>{{ $transaction->Customer->FullName  }}</p></div>
                    <div class="col-2"><p>{{ $transaction->TransactionDate->format('Y-m-d') }}</p></div>
                    <div class="col-2"><p>${{ $transaction->TotalPrice }}</p></div>
                    <div class="col-2"><p>{{ $transaction->TransactionStatus }}</p></div>
                    @if ($transaction->TransactionStatus == 'NotYetDelivered')
                        <div class="col-2">
                            <form class="form-inline" method="post" action="/transaction/{{ $transaction->id }}/shipped">
                                {{ csrf_field() }}
                                <p><input class="btn btn-primary btn-sm" name="status-change" type="submit" value="Shipped"></p>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection