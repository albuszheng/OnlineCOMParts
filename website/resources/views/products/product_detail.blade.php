@extends('layouts.master')

@section('title')
    OCPS Product: {{ $product->ProductName }}
@endsection

@section('content')
    <div class="row">
        <div class="col-3 info-section">
            <h2 class="product-name">{{ $product->ProductName }}</h2>
            <p class="kind">{{ $product->ProductKind }}</p>
            <p class="price">Price: ${{ $product->Price }}</p>
            <div class="actions">
                <p class="amount"></p>
                <a class="purchase btn btn-primary" href="/transaction/new/{{ $product->id }}}">Purchase</a>
            </div>
        </div>
    </div>
    @include('specs.'.$kind)
@endsection