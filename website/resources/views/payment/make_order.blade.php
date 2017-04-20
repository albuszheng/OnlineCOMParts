@extends('layouts.master')

@section('title')
    OCPS Make Order
@endsection

@section('content')
<form class="order-detail" method="POST" action="/transaction">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-7">
            <div class="payment-method info-box">
                <h3>Payment</h3>
                <p>
{{--                    {{ $customer->paymentMethod }}--}}
                    VISA
                </p>
            </div>

            <div class="ship-address info-box">
                <h3>Shipment</h3>
                <p>
                    Name: {{ $customer->FullName }}
                </p>
                <p>
                    Address: {{ $customer->AddressStreet }}
                </p>
                <p>
                    City: {{ $customer->AddressCity }} State: {{ $customer->AddressState }}
                </p>
                <p>
                    Zip: {{ $customer->AddressZip }}
                </p>

            </div>
            <div class="item info-box">
                <h3>Shipment</h3>
                <div class="row form-inline">
                    <h5 class="col-4">{{ $product->ProductName }}</h5>
                    <p class="col-8"><input name="amount" id="amount" class="form-control" type="number" min="0" value="1" required autofocus></p>
                    <input name="product" id="product-id" class="invisible" type="text" value="{{ $product->id }}" hidden>
                </div>
            </div>
        </div>

        <div class="col-5">
            <div class="action info-box">
                <h3 class="price">
                    Price
                </h3>
                <p class="item-price">Item Price: <span id="single">{{ $product->Price }}</span></p>
                <p class="total-price">Total: <span id="total"> {{ $product->Price }} </span></p>
                <input name="price" id="price" class="invisible" type="text" value="{{ $product->Price }}" hidden>
                <input name="store" id="store" class="invisible" type="text" value="{{ $product->Inventory->StoreID }}" hidden>
                <input class="btn btn-primary" title="Purchase" type="submit">
            </div>
        </div>
    </div>
</form>
@endsection

@section('js')
    <script type="text/javascript">
//        $(document).ready(function () {
//            var single = $('#single').val();
//            var total = single * $('#amount').val();
//            $('#total').text(total);
//        });
        $('#amount').on('change', function () {
            var single = parseFloat($('#single').text());
            console.log(single);
            var total = single * parseInt($('#amount').val());
            console.log(total);
            $('#total').text(total);
            $('#price').val(total);
        })
    </script>
@endsection