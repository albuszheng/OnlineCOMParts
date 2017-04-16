@extends('layouts.master')

@section('title')
    Opps, OCPS Order Unsuccessful
@endsection

@section('content')
    <div class="fail-info">
        <h2 class="order-fail">Opps, something went wrong...</h2>
        <p class="detailed-info">
            Sorry, we can't finish your order right now, we have not charged you of the total price,
            you could click <a href="/product_list">here</a>  to go back to the product list and re-order again.
            <br />
            Again, sorry for the inconvenience...
        </p>
    </div>
@endsection