@extends('layouts.master')

@section('title')
    OCPS Make Order
@endsection

@section('content')
<form class="order-detail" method="POST" action="/transaction">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-7">
            <div class="payment-method order-card">
                <h3>Payment</h3>
                <p>
{{--                    {{ $customer->paymentMethod }}--}}
                    VISA
                </p>
            </div>

            <div class="ship-address order-card">
                <h3>Shipment</h3>
                <p>
                    {{ $customer->FullName }}
                </p>
                <p>
                    {{ $customer->AddressStreet }}
                </p>
                <p>
                    {{ $customer->AddressCity }} {{ $customer->AddressState }}
                </p>
                <p>
                    {{ $customer->AddressZip }}
                </p>

            </div>
            <div class="item order-card">
                <h3>Shipment</h3>
                <p>
                    {{ $product->ProductName }}:
                    <input name="amount" id="amount" class="form-control" type="number" min="0" value="1" required autofocus>
                    <input name="product" id="product-id" class="invisible" type="text" value="{{ $product->id }}" hidden>
                </p>
            </div>
        </div>

        <div class="col-5">
            <div class="action order-card">
                <h3 class="price">
                    Price
                </h3>
                <p class="item-price">Item Price: {{ $product->Price }}</p>
                <p class="total-price">Total: {{ ($product->Price) * 2 }}</p>
                <input name="price" id="price" class="invisible" type="text" value="{{ ($product->Price) * 2 }}" hidden>
                <input name="store" id="store" class="invisible" type="text" value="{{ $product->Inventory->StoreID }}" hidden>
                <input class="btn btn-primary" title="Purchase" type="submit">
            </div>
        </div>
    </div>
</form>
@endsection