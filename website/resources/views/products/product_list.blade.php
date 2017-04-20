@extends('layouts.master')

@section('title')
    OCPS Product List
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Product List {{ $products->first()->ProductKind }}</li>
    </ol>
    <div class="row product-list">
    <div class="col-3">
        <h4>Query Condition</h4>
        <br>
        <form class="filter">
            <div class="price"><h6>Price</h6></div>
            <div class="stores"><h6>Store</h6></div>
        </form>
    </div>
    <div class="col-9">
        @foreach ($products as $product)
            <div class="product-item" data-item="{{ $product->id }}">
                <div class="product-info">
                    <h3 class="name"><a href="/products/{{ $product->id }}">{{ $product->Name }}</a></h3>
                    <p class="kind">{{ $kind }}</p>
                    <p class="manufacturer">{{ $product->Manufacturer }}</p>
                </div>
                <p class="price">
                    ${{ $product->Price }}
                </p>
                <div class="action pull-right">
                    <a class="purchase btn btn-primary" href="/transaction/new/{{ $product->id }}}">Purchase</a>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection