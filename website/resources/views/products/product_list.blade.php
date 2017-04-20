@extends('layouts.master')

@section('title')
    OCPS Product List
@endsection

@section('content')
    <div class="row product-list">
    <div class="col-3">
        <form class="filter">
            <div class="product-kind">s</div>
            <div class="price">a</div>
            <div class="stores">d</div>
        </form>
    </div>
    <div class="col-9">
        @foreach ($products as $product)
            <div class="product-item">
                <div class="product-info">
                    <h3 class="name"><a href="/products/{{ $product->id }}">{{ $product->Name }}</a></h3>
                    <p class="kind">{{ $kind }}</p>
{{--                    <p class="store">{{ $product->storeName }}</p>--}}
                    <p class="manufacturer">{{ $product->Manufacturer }}</p>
                </div>
                <p class="price">
                    ${{ $product->Price }}
                </p>
                <div class="action">
                    <a class="purchase btn btn-primary" href="/transaction/new/{{ $product->id }}}">Purchase</a>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection