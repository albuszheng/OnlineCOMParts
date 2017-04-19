@extends('layouts.master')

@section('title')
    OCPS Product: {{ $product->ProductName }}
@endsection

@section('content')
    <div class="row">
        <div class="col-3 info-box">
            <h2 class="product-name">{{ $product->ProductName }}</h2>
            <p class="kind">{{ $product->ProductKind }}</p>
            <p class="price">Price: ${{ $product->Price }}</p>
            <form class="actions">
                <p class="amount"></p>
                <input type="submit" title="Purchase">
            </form>
        </div>
    </div>
    @include('specs.'.$kind)
@endsection