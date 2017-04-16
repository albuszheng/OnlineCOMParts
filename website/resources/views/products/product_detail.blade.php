@extends('layouts.master')

@section('title')
    OCPS Product: {{ $product->name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-1 pic">
            <img src={{ $product->imageLoc }}>
        </div>
        <div class="col-3 info-box">
            <p class="store">{{ $product->storeName }}</p>
            <h2 class="product-name">{{ $product->name }}</h2>

            <form class="actions">
                <p class="amount"></p>
                <input type="submit" title="Purchase">
            </form>
        </div>
    </div>
    <div class="row specs">
        <h4>Specs</h4>
        @foreach ($specs as $spec)
        <div class="col-6">
            <p><span class="spec-name">{{ $spec->name }}</span>: <span class="spec-value">{{ $spec->value }}</span></p>
        </div>
        @endforeach
    </div>
@endsection